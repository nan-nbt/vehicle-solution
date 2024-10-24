<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta tag -->
	<?php $this->load->view("layouts/_meta.php") ?>

	<!-- title tag -->
	<?php $this->load->view("layouts/_title.php") ?>

	<!-- link stylesheet -->
	<?php $this->load->view("layouts/_css.php") ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
	<!-- Site wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<?php $this->load->view("layouts/_header.php") ?>

		<!-- Sidebar -->
		<?php $this->load->view("layouts/_sidebar.php") ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header"></section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">TOPSIS METHOD</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- form start -->
									<form class="form-horizontal" id="form-analysis-topsis">
										<div class="row border-bottom mb-3" id="cb-alternative">
											<!-- list data alternative for check box input -->
										</div>
										<!-- /.row -->

										<div class="row" id="i-criteria">
											<!-- list data criteria for user input weight -->
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="col-md-3 float-right">
													<div class="form-group">
														<label for="process"></label>
														<button type="submit" class="form-control btn btn-primary" id="process"><span class="nav-icon fas fa-clock"></span> Process Counting</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!-- /.form analysis process -->
								</div>
							</div>
						</div>

						<div class="col-12" id="result-topsis-method">
							<!-- using ajax response set DOM -->
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<div id="close-overlay"></div>
		<!-- /.content-wrapper -->

		<!-- Footer -->
		<?php $this->load->view("layouts/_footer.php") ?>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- Javascript -->
	<?php $this->load->view("layouts/_js.php") ?>

	<!-- Page specific script -->
	<script>
		// page onload function
		$(document).ready(function() {
			// call function on page ready
			loadAlternative();
			loadCriteria();
		});

		// pace-progress when ajax request
		$(document).ajaxStart(function() {
			Pace.restart();
		});

		function loadAlternative() {
			$.ajax({
				url: "<?php echo base_url('users/alternative/listalternative'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					if (response.length > 0) {
						let cb = response.map(alternate => `
								<div class="col-md-2">
									<div class="form-group clearfix">
										<div class="icheck-primary d-inline" style="margin-right: 30px;">
										<input type="checkbox" id="${alternate.aid}" checked>
										<label for="${alternate.aid}">${alternate.name}</label>
										</div>
									</div>
								</div>
						`).join('');

						$('#cb-alternative').html(cb);
					}
				}
			});
		}

		function loadCriteria() {
			$.ajax({
				url: "<?php echo base_url('users/criteria/listcriteria'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					if (response.length > 0) {
						let options = response.map(criterion => `
								<div class="col-md-3">
									<div class="form-group">
									<label for="${criterion.cid}" style="margin-bottom:9px;"><span class="text-danger">*</span>${criterion.name} :</label>
									<input type="number" class="form-control" id="${criterion.cid}" name="criteria[]" placeholder="0.00 ~ 10.00" max="100" value="${criterion.weight}" data-impact="${criterion.impact}" required>
									</div>
								</div>
						`).join('');

						$('#i-criteria').html(options);
					}
				}
			});
		}

		function topsisMethod(matrix, weights, impacts) {
			debugger
			// create matrix normalization
			const normalized = [];
			const matnorm = [];
			const matnormweight = [];
			for (let i = 0; i < matrix.length; i++) {
				normalized[i] = [];
				matnorm[i] = [];
				matnormweight[i] = [];
				for (let j = 0; j < matrix[i].length; j++) {
					// counting normalization value
					const sum = matrix.reduce((acc, row) => acc + row[j] ** 2, 0);
					normalized[i][j] = matrix[i][j] / Math.sqrt(sum);
					matnorm[i].push(normalized[i][j]);
					// implementation normalization weighted
					// normalized[i][j] *= weights[j];
					matnormweight[i].push(normalized[i][j] *= weights[j]);
					// implementation impacts
					normalized[i][j] *= impacts[j] === '+' ? 1 : -1;
				}
			}

			// matrix idal positive and ideal negative solution
			const idealPos = [];
			const idealNeg = [];
			for (let j = 0; j < matrix[0].length; j++) {
				idealPos[j] = Math.max(...normalized.map((row) => row[j]));
				idealNeg[j] = Math.min(...normalized.map((row) => row[j]));
			}

			// count distance alternative with ideal positive and negative solution
			const posDist = [];
			const negDist = [];
			for (let i = 0; i < normalized.length; i++) {
				posDist[i] = Math.sqrt(
					normalized[i].reduce(
						(acc, value, j) => acc + (value - idealPos[j]) ** 2,
						0
					)
				);
				negDist[i] = Math.sqrt(
					normalized[i].reduce(
						(acc, value, j) => acc + (value - idealNeg[j]) ** 2,
						0
					)
				);
			}

			// count preferenced value
			const preference = [];
			for (let i = 0; i < normalized.length; i++) {
				preference[i] = negDist[i] / (posDist[i] + negDist[i]);
			}

			return [matnorm, matnormweight, normalized, idealPos, idealNeg, posDist, negDist, preference];

		}

		$('#form-analysis-topsis').on('submit', function(event) {
			debugger
			event.preventDefault();

			const cb = $(this).find(':input[type="checkbox"]:checked');
			const opt = $(this).find(':input[type="number"]');

			const array_aid = [];

			for (let i = 0; i < cb.length; i++) {
				array_aid.push("'" + cb[i].id + "'");
			}

			$.ajax({
				url: '<?php echo base_url('users/mapping/listmapbyalt'); ?>',
				method: 'post',
				dataType: 'json',
				data: {
					array_aid: array_aid
				},
				success: function(response) {
					debugger
					if (response.length > 0) {
						// create the result array using a loop
						const matrix = [];
						const weights = [];
						const impacts = [];

						// create aid object
						const aidMap = {};

						for (let i = 0; i < response.length; i++) {
							let obj = response[i];
							let aid = obj.aid;
							let weight = obj.weight;

							if (!aidMap[aid]) {
								aidMap[aid] = [];
							}

							aidMap[aid].push(weight);
						}

						// convert aidMap to array of arrays (set matrix data)
						for (let aid in aidMap) {
							if (aidMap.hasOwnProperty(aid)) {
								matrix.push(aidMap[aid]);
							}
						}

						// set weights data
						for (let i = 0; i < opt.length; i++) {
							weights.push(opt[i].value);
						}

						// set impacts data
						for (let i = 0; i < opt.length; i++) {
							if (opt[i].dataset.impact === 'Cost') {
								impacts.push('-');
							} else {
								impacts.push('+');
							}
						}

						// run function topsis method
						topsisMethod(matrix, weights, impacts);

						/**@abstract
						 * FLOW PROCESS
						 * get alternative rows data selected
						 */
						let noAlt = 1;
						const rowsAlt = [];
						const uniqueAids = new Map();

						for (const item of response) {
							const {
								aid,
								anm,
								adesc
							} = item;

							if (!uniqueAids.has(aid)) {
								uniqueAids.set(aid, true);
								rowsAlt.push(`
									<tr>
										<td>${noAlt++}</td>
										<td>${anm}</td>
										<td>${adesc}</td>
									</tr>
								`);
							}
						}

						const altHtml = rowsAlt.join('\n');

						/**@abstract
						 * get criteria rows data 
						 */
						let noCri = 1;
						const rowsCri = [];
						const uniqueCris = new Map();

						for (const item of response) {
							const {
								cid,
								cnm,
								imp,
								cweight
							} = item;

							if (!uniqueCris.has(cid)) {
								uniqueCris.set(cid, true);
								rowsCri.push(`
									<tr>
										<td>${noCri++}</td>
										<td>${cnm}</td>
										<td>${imp}</td>
										<td>${cweight}</td>
									</tr>
								`);
							}
						}

						const criHtml = rowsCri.join('\n');

						/**@abstract
						 * conversion alternative criteria
						 */
						const rowsConv = [];

						for (let i = 0; i < matrix.length; i++) {
							rowsConv.push('<tr>');

							for (let j = 0; j < matrix[i].length; j++) {
								rowsConv.push('<td>' + matrix[i][j] + '</td>');
								if (j === matrix[i].length - 1) {
									rowsConv.push('</tr>');
								}
							}
						}

						const convHtml = rowsConv.join('\n');

						/**@abstract
						 * matrix normalization
						 */
						const rowsNorm = [];
						const [matnorm, matnormweight, normalized, idealPos, idealNeg, posDist, negDist, preference] = topsisMethod(matrix, weights, impacts);

						for (let i = 0; i < matnorm.length; i++) {
							rowsNorm.push('<tr>');

							for (let j = 0; j < matnorm[i].length; j++) {
								rowsNorm.push('<td>' + matnorm[i][j].toFixed(4) + '</td>');
								if (j === matnorm[i].length - 1) {
									rowsNorm.push('</tr>');
								}
							}
						}

						const matrixNormHtml = rowsNorm.join('\n');

						/**@abstract
						 * normalization weighted
						 */
						const rowsNormWeight = [];
						for (let i = 0; i < matnormweight.length; i++) {
							rowsNormWeight.push('<tr>');

							for (let j = 0; j < matnormweight[i].length; j++) {
								rowsNormWeight.push('<td>' + matnormweight[i][j].toFixed(4) + '</td>');
								if (j === matnormweight[i].length - 1) {
									rowsNormWeight.push('</tr>');
								}
							}
						}

						const matrixNormWeightHtml = rowsNormWeight.join('\n');

						/**@abstract
						 * ideal positive
						 */
						const rowsIdealPos = [];
						for (let i = 0; i < idealPos.length; i++) {
							rowsIdealPos.push('<td>' + idealPos[i].toFixed(4) + '</td>');
						}

						const idealPosHtml = rowsIdealPos.join('\n');

						/**@abstract
						 * ideal negative
						 */
						const rowsIdealNeg = [];
						for (let i = 0; i < idealNeg.length; i++) {
							rowsIdealNeg.push('<td>' + idealNeg[i].toFixed(4) + '</td>');
						}

						const idealNegHtml = rowsIdealNeg.join('\n');

						/**@abstract
						 * positive distance
						 */
						const rowsPosDist = [];
						for (let i = 0; i < posDist.length; i++) {
							rowsPosDist.push('<tr><td>' + posDist[i].toFixed(4) + '</td></tr>');
						}

						const posDistHtml = rowsPosDist.join('\n');

						/**@abstract
						 * negative distance
						 */
						const rowsNegDist = [];
						for (let i = 0; i < negDist.length; i++) {
							rowsNegDist.push('<tr><td>' + negDist[i].toFixed(4) + '</td></tr>');
						}

						const negDistHtml = rowsNegDist.join('\n');

						/**@abstract
						 * result preference
						 */
						debugger
						const rowsPref = [];
						for (let i = 0; i < preference.length; i++) {
							rowsPref.push('<tr><td>' + preference[i].toFixed(4) + '</td></tr>');
						}

						const preferenceHtml = rowsPref.join('\n');

						/**@abstract
						 * create data array alternative value for get preference ranking 
						 * array = [[alternative, value]]
						 */
						debugger
						const alt = [];
						const altUrl = [];
						const altPref = [];
						for (let i = 0; i < response.length; i++) {
							if (!alt.includes(response[i].anm)) {
								alt.push(response[i].anm);
							}
						}

						for (let i = 0; i < response.length; i++) {
							if (!altUrl.includes(response[i].url)) {
								altUrl.push(response[i].url);
							}
						}

						for (let i = 0; i < alt.length; i++) {
							altPref.push([alt[i], preference[i], altUrl[i]]);
						}

						/**@abstract
						 * preference ranking
						 */
						debugger
						const rowsPrefRank = [];
						const prefRank = altPref.sort((a, b) => b[1] - a[1]);
						for (let i = 0; i < prefRank.length; i++) {
							rowsPrefRank.push('<tr><td>' + prefRank[i][1].toFixed(4) + '</td></tr>');
						}

						const prefRankHtml = rowsPrefRank.join('\n');

						/**@abstract
						 * alternative ranking
						 */
						debugger
						const rowsAltRank = [];
						for (let i = 0; i < altPref.length; i++) {
							rowsAltRank.push('<tr><td>' + altPref[i][0] + '</td></tr>');
						}

						const altRankHtml = rowsAltRank.join('\n');

						/**@abstract
						 * CONCLUSION
						 * conclusion alternative ranking
						 */
						debugger
						let noConc = 1;
						const rowsAltConc = [];
						for (let i = 0; i < altPref.length; i++) {
							rowsAltConc.push('<tr><td>' + noConc++ + '</td><td>' + altPref[i][0] + '</td><td>' + altPref[i][1].toFixed(4) + '</td></tr>');
						}

						const concHtml = rowsAltConc.join('\n');
						const bestConc = altPref[0][0];
						const urlConc = altPref[0][2];

						/**@abstract
						 * conclusion card html
						 */
						$('#result-topsis-method').html(`
							<div class="card collapsed-card">
								<div class="card-header">
									<h3 class="card-title">FLOW PROCESS</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<!-- alternative table -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Alternative Selected</label>
											<table id="table-alternative" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<thead>
													<tr>
														<th>No</th>
														<th>Alternative</th>
														<th>Description</th>
													</tr>
												</thead>
												<tbody id="list-alternative">
													${altHtml}
												</tbody>
											</table>
										</div>

										<!-- crtieria table -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Criteria & Weight Input</label>
											<table id="table-criteria" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<thead>
													<tr>
														<th>No</th>
														<th>Criteria</th>
														<th>Cost/benefit</th>
														<th>Weight</th>
													</tr>
												</thead>
												<tbody id="list-criteria">
													${criHtml}
												</tbody>
											</table>
										</div>

										<!-- mapping alternative crtieria table -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Conversion Alternative Criteria</label>
											<table id="table-mapping" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-mapping">
													${convHtml}
												</tbody>
											</table>
										</div>

										<!-- matrix normalization table -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Normalization</label>
											<table id="table-normal" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-normal">
													${matrixNormHtml}
												</tbody>
											</table>
										</div>

										<!-- matrix normalization weighted table -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Normalization Weighted</label>
											<table id="table-nw" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-nw">
													${matrixNormWeightHtml}
												</tbody>
											</table>
										</div>

										<!-- A+ -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> A+</label>
											<table id="table-aplus" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-aplus">
													<tr>
														${idealPosHtml}
													</tr>
												</tbody>
											</table>
										</div>

										<!-- A- -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> A-</label>
											<table id="table-amin" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-amin">
													<tr>
														${idealNegHtml}
													</tr>
												</tbody>
											</table>
										</div>

										<!-- D+ -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> D+</label>
											<table id="table-dplus" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-dplus">
													${posDistHtml}
												</tbody>
											</table>
										</div>

										<!-- D- -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> D-</label>
											<table id="table-dmin" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-dmin">
													${negDistHtml}
												</tbody>
											</table>
										</div>

										<!-- result -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Result</label>
											<table id="table-res" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-res">
													${preferenceHtml}
												</tbody>
											</table>
										</div>

										<!-- result rank -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Result Ranking</label>
											<table id="table-resrank" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-resrank">
													${prefRankHtml}
												</tbody>
											</table>
										</div>

										<!-- alternative rank -->
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Alternative Ranking</label>
											<table id="table-altrank" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<tbody id="list-altrank">
													${altRankHtml}
												</tbody>
											</table>
										</div>

									</div>
									<!-- /.row -->
								</div>
								<!-- ./card-body -->
							</div>
							<!-- /.card -->
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">CONCLUSION</h3>
									<div class="card-tools">
										<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
										</button>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<label><i class="fas fa-caret-right"></i> Alternative Rangking</label>
											<table id="table-conclusion" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
												<thead>
													<tr>
														<th>Rangking</th>
														<th>Alternative</th>
														<th>Value</th>
													</tr>
												</thead>
												<tbody id="list-conclusion">
													${concHtml}
												</tbody>
											</table>
										</div>
									</div>

									<div class="alert alert-info alert-dismissible">
										<!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
										<h5><i class="icon fas fa-info"></i> Infromation!</h5>
										Based on the results of the decision support system using the TOPSIS method, the best result is the <strong>${bestConc}</strong>. You can check detail of the vehicle on the <a href="${urlConc}" target="official">Official Website</a>.
									</div>
								</div>
							</div>
							<!-- /.card -->						
						`);

					}
				}
			});
		});
	</script>

</body>

</html>