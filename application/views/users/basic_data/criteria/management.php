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
	<div class="wrapper">
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
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<!-- form start -->
									<form class="form-horizontal" id="form-query-criteria">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group float-right">
													<label for="input-col" style="margin-top:13px;"></label>
													<button type="button" class="form-control btn btn-default" data-toggle="modal" data-target="#modal-input-criteria" id="add">
														<i class="fas fa-plus-circle"></i> Input Data Criteria
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!-- /.card-header -->

								<div class="card-body">
									<table id="example2" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
										<thead>
											<tr>
												<th>NO</th>
												<th>CRITERIA ID</th>
												<th>NAME</th>
												<th>DESCRIPTION</th>
												<th>COST/BENEFIT</th>
												<th>WEIGHT</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody id="list-criteria">
											<!-- Using JQuery Ajax to display data -->
										</tbody>
									</table>
								</div>
								<!-- /.card-body -->

							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->

				<!-- Modal form input data criteria -->
				<div class="modal fade" id="modal-input-criteria">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Input Data Criteria</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-input-criteria" method="POST">
								<div class="modal-body">
									<!-- <p>One fine body&hellip;</p> -->
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="cid" class="col-form-label"><span class="text-danger">*</span>Criteria ID :</label>
													<input type="text" class="form-control" id="cid" name="cid" placeholder="Criteria ID" readonly required>
												</div>
												<div class="form-group">
													<label for="name" class="col-form-label"><span class="text-danger">*</span>Criteria Name :</label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Criteria Name" required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="desc" class="col-form-label"><span class="text-danger">*</span>Description :</label>
													<input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="impact" class="col-form-label"><span class="text-danger">*</span>Cost/Benefit :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="impact" name="impact" required>
														<option value="" selected disabled>-- Option --</option>
														<option value="Cost">Cost</option>
														<option value="Benefit">Benefit</option>
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="weight" class="col-form-label"><span class="text-danger">*</span>Weight :</label>
													<input type="number" class="form-control" id="weight" name="weight" placeholder="0.00 ~ 20.00" max="100" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.modal-body -->
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default" id="reset">Cancel</button>
									<button type="submit" class="btn btn-primary" id="submit-criteria">Submit</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- modal form edit data criteria -->
				<div class="modal fade" id="modal-edit-criteria">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit Data Criteria</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-edit-criteria" method="POST">
								<div class="modal-body">
									<!-- <p>One fine body&hellip;</p> -->
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_cid" class="col-form-label"><span class="text-danger">*</span>Criteria ID :</label>
													<input type="text" class="form-control" id="e_cid" name="e_cid" placeholder="Criteria ID" readonly required>
												</div>
												<div class="form-group">
													<label for="e_name" class="col-form-label"><span class="text-danger">*</span>Criteria Name :</label>
													<input type="text" class="form-control" id="e_name" name="e_name" placeholder="Criteria Name" required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_desc" class="col-form-label"><span class="text-danger">*</span>Description :</label>
													<input type="text" class="form-control" id="e_desc" name="e_desc" placeholder="Description" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_impact" class="col-form-label"><span class="text-danger">*</span>Cost/Benefit :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="e_impact" name="e_impact" required>
														<option value="" selected disabled>-- Option --</option>
														<option value="Cost">Cost</option>
														<option value="Benefit">Benefit</option>
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_weight" class="col-form-label"><span class="text-danger">*</span>Weight :</label>
													<input type="number" class="form-control" id="e_weight" name="e_weight" placeholder="0.00 ~ 10.00" max="100" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.modal-body -->
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default" id="e_reset">Cancel</button>
									<button type="submit" class="btn btn-primary" id="update-criteria">Update</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- Modal Form Delete Data Process -->
				<div class="modal fade" id="modal-delete-criteria">
					<div class="modal-dialog modal-default">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Delete Criteria Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-delete-criteria" method="POST">
								<div class="modal-body">
									<!-- <p>One fine body&hellip;</p> -->
									<input type="hidden" class="form-control" id="id-criteria" name="id-criteria">
									<span>Are sure to delete this criteria data?</span>
									<!-- /.card-body -->
								</div>
								<!-- /.modal-body -->
								<div class="modal-footer justify-content-between">
									<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
									<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">No</button>
									<button type="submit" class="btn btn-primary">Yes</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

			</section>
			<!-- /.content -->
		</div>
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
		// global variable
		let g_cid, g_name, g_desc, g_impact, g_weight, g_alert;

		// on page loaded
		$(document).ready(function() {
			debugger
			loadData();
		});

		// pace-progress when ajax request
		$(document).ajaxStart(function() {
			Pace.restart();
		});

		// function auto criteria id
		$('#add').on('click', function() {
			$.ajax({
				url: "<?php echo base_url('users/criteria/listcriteria'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					debugger
					let no, cid;
					if (response.length > 0) {
						for (let i = 0; i < response.length; i++) {
							no = parseInt(response[i].cid.substr(1, 3)) + 1;
							cid = 'C' + no;
						}
						$('#cid').val(cid);
					} else {
						cid = 'C1';
						$('#cid').val(cid);
					}
				}
			});
		});

		// funtion add criteria
		$('#form-input-criteria').on('submit', function(event) {
			event.preventDefault();

			const $form = $(event.currentTarget);
			const $cid = $('#cid');
			const $name = $('#name');
			const $desc = $('#desc');
			const $impact = $('#impact');
			const $weight = $('#weight');

			$.ajax({
				url: '<?php echo base_url('users/criteria/add'); ?>',
				type: 'post',
				dataType: 'json',
				data: $form.serialize(),
				success: function(response) {
					if (response !== true) {
						g_alert = response;
						warningAlert();
					} else {
						$cid.val('');
						$name.val('');
						$desc.val('');
						$impact.val('').change();
						$weight.val('');

						$('#modal-input-criteria').modal('hide');

						g_alert = 'save successful!';
						successAlert();
						loadData();
					}
				}
			});
		});

		// function edit criteria
		$('#list-criteria').on('click', '.edit-row', function() {
			debugger
			$('#modal-edit-criteria').modal('show');

			$("#e_cid").val($(this).data('cid'));
			$("#e_name").val($(this).data('name'));
			$("#e_desc").val($(this).data('desc'));
			$("#e_impact").val($(this).data('impact')).change();
			$("#e_weight").val($(this).data('weight'));

			// set default value for reset form edit (global variable)
			g_cid = $(this).data('cid');
			g_name = $(this).data('name');
			g_desc = $(this).data('desc');
			g_impact = $(this).data('impact');
			g_weight = $(this).data('weight');
		});

		// update criteria
		$('#form-edit-criteria').on('submit', function(event) {
			debugger
			event.preventDefault();

			const $cid = $('#e_cid');
			const $name = $('#e_name');
			const $desc = $('#e_desc');
			const $impact = $('#e_impact');
			const $weight = $('#e_weight');

			const data = {
				cid: $cid.val(),
				name: $name.val(),
				desc: $desc.val(),
				impact: $impact.val(),
				weight: $weight.val()
			};

			$.ajax({
				url: "<?php echo base_url('users/criteria/edit'); ?>",
				type: "post",
				dataType: "json",
				data: data,
				success: function(response) {
					debugger
					$cid.val('');
					$name.val('');
					$desc.val('');
					$impact.val('').change();
					$weight.val('');

					$('#modal-edit-criteria').modal('hide');

					if (response !== true) {
						g_alert = response;
						errorAlert(g_alert);
					} else {
						g_alert = 'update successful!';
						successAlert(g_alert);
						loadData();
					}
				}
			});
		});

		// function delete criteria
		$('#list-criteria').on('click', '.delete-row', function() {
			// set default value cid for delete data criteria (global variable)
			let cid = $(this).data('cid');
			$('#modal-delete-criteria').modal('show');
			$('#id-criteria').val(cid);
		});

		// delete criteria
		$('#form-delete-criteria').on('submit', function(event) {
			event.preventDefault();

			const $cid = $('#id-criteria').val();

			$.ajax({
				url: "<?php echo base_url('users/criteria/delete/'); ?>" + $cid,
				type: "POST",
				dataType: 'json',
				data: {
					cid: $cid
				},
				success: function(response) {
					// reset id-criteria filed value
					$("#" + $cid).remove();
					$('#id-criteria').val("");

					$('#modal-delete-criteria').modal('hide');

					if (response !== true) {
						g_alert = response;
						errorAlert();
					} else {
						g_alert = 'delete successful!';
						successAlert();
						loadData();
					}
				}
			});
		});

		// function reset form input criteria
		$('#reset').on('click', function() {
			//set default
			$('#name').val("");
			$('#desc').val("");
			$('#impact').val("").change();
			$('#weight').val("");
		});

		// function reset form edit criteria
		$('#e_reset').on('click', function() {
			//set default
			$('#e_name').val(g_name);
			$('#e_desc').val(g_desc);
			$('#e_impact').val(g_impact).change();
			$('#e_weight').val(g_weight);
		});

		// function load data
		function loadData() {
			const $table = $('#example2');
			const $listCriteria = $('#list-criteria');

			$.ajax({
				url: "<?php echo base_url('users/criteria/listcriteria'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					if (response.length > 0) {
						const rows = response.map((item, i) => `
							<tr>
								<td>${i + 1}</td>
								<td>${item.cid}</td>
								<td>${item.name}</td>
								<td>${item.description}</td>
								<td>${item.impact}</td>
								<td>${item.weight}</td>
								<td>
									<a href="javascript:void(0);" class="btn btn-sm p-0 edit-row"
									data-cid="${item.cid}"
									data-name="${item.name}"
									data-desc="${item.description}"
									data-impact="${item.impact}"
									data-weight="${item.weight}">
										<i class="fas fa-edit"></i>
									</a> |
									<a href="javascript:void(0);" class="btn btn-sm p-0 delete-row" data-cid="${item.cid}">
										<i class="fas fa-trash"></i>
									</a>
								</td>
							</tr>
						`).join('');

						$table.DataTable().destroy();
						$listCriteria.html(rows);

						const table = $table.DataTable({
							paging: true,
							lengthChange: true,
							searching: true,
							ordering: true,
							info: true,
							autoWidth: true,
							responsive: false,
							scrollY: 450,
							scrollX: true,
							bStateSave: true,

							/**@abstract
							 * set load data in current page: datatable pagination load   
							 */
							fnStateSave: function(oSettings, oData) {
								localStorage.setItem('offersDataTables', JSON.stringify(oData));
							},
							fnStateLoad: function(oSettings) {
								return JSON.parse(localStorage.getItem('offersDataTables'));
							}
						});

						table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

						/**@abstract
						 *  on row click get data row
						 */
						$table.find('tbody').on('click', 'tr', function() {
							table.$('tr.selected').removeClass('selected');
							$(this).addClass('selected');
						});

					} else {
						$table.DataTable().destroy();
						$listCriteria.html(null);

						const table = $table.DataTable({
							paging: true,
							lengthChange: true,
							searching: false,
							ordering: true,
							info: true,
							autoWidth: true,
							responsive: false,
							scrollX: true
						});

						table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
					}
				}
			});
		}


		// SweetAlert success
		function successAlert() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'success',
				title: 'Alert! \n ' + g_alert
			});
		}

		// SweetAlert warning
		function warningAlert() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'warning',
				title: 'Alert! \n ' + g_alert
			});
		}

		// SweetAlert error
		function errorAlert() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				icon: 'error',
				title: 'Alert! \n ' + g_alert
			});
		}
	</script>

</body>

</html>