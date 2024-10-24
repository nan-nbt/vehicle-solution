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
									<form class="form-horizontal" id="form-query-mapping">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group float-right">
													<label for="input-col" style="margin-top:13px;"></label>
													<button type="button" class="form-control btn btn-default" data-toggle="modal" data-target="#modal-input-mapping" id="add">
														<i class="fas fa-plus-circle"></i> Input Data Mapping
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
												<th>MAPPING ID</th>
												<th>ALTERNATIVE</th>
												<th>CRITERIA</th>
												<th>WEIGHT</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody id="list-mapping">
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

				<!-- Modal Form Input Data Mapping -->
				<div class="modal fade" id="modal-input-mapping">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Input Data Mapping</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-input-mapping" method="POST">
								<div class="modal-body">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="mid" class="col-form-label"><span class="text-danger">*</span>Mapping ID :</label>
													<input type="text" class="form-control" id="mid" name="mid" placeholder="Mapping ID" readonly required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="aid" class="col-form-label"><span class="text-danger">*</span>Alternative :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="aid" name="aid" required>
														<!-- using jquery to get data option -->
													</select>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="cid" class="col-form-label"><span class="text-danger">*</span>Criteria :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="cid" name="cid" required disabled>
														<!-- using jquery to get data option -->
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="weight" class="col-form-label"><span class="text-danger">*</span>Weight :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="weight" name="weight" required>
														<!-- using jquery to get data option -->
													</select>
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
									<button type="submit" class="btn btn-primary" id="submit-mapping">Submit</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- Modal Form Edit Data Mapping -->
				<div class="modal fade" id="modal-edit-mapping">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit Data Mapping</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-edit-mapping" method="POST">
								<div class="modal-body">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_mid" class="col-form-label"><span class="text-danger">*</span>Mapping ID :</label>
													<input type="text" class="form-control" id="e_mid" name="e_mid" placeholder="Mapping ID" readonly required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_aid" class="col-form-label"><span class="text-danger">*</span>Alternative :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="e_aid" name="e_aid" required disabled>
														<!-- using jquery to get data option -->
													</select>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_cid" class="col-form-label"><span class="text-danger">*</span>Criteria :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="e_cid" name="e_cid" required disabled>
														<!-- using jquery to get data option -->
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_weight" class="col-form-label"><span class="text-danger">*</span>Weight :</label>
													<select class="form-control select2bs4" style="width: 100%;" id="e_weight" name="e_weight" required>
														<!-- using jquery to get data option -->
													</select>
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
									<button type="submit" class="btn btn-primary" id="update_mapping">Update</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- Modal Form Delete Data Mapping -->
				<div class="modal fade" id="modal-delete-mapping">
					<div class="modal-dialog modal-default">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Delete Mapping Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-delete-mapping" method="POST">
								<div class="modal-body">
									<input type="hidden" class="form-control" id="id-mapping" name="id-mapping">
									<span>Are sure to delete this mapping data?</span>
									<!-- /.card-body -->
								</div>
								<!-- /.modal-body -->
								<div class="modal-footer justify-content-between">
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
		let g_mid, g_aid, g_cid, g_weight, g_alert;

		// on page load
		$(document).ready(function() {
			loadData();
			loadDropAlt();
			loadDropCri();
			loadRangeVal();
		});

		// pace-progress when ajax request
		$(document).ajaxStart(function() {
			Pace.restart();
		});

		// function auto mapping id
		$('#add').on('click', function() {
			$.ajax({
				url: "<?php echo base_url('users/mapping/listmap'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					debugger
					let no, mid;
					if (response.length > 0) {
						for (let i = 0; i < response.length; i++) {
							no = parseInt(response[i].mid.substr(1, 3)) + 1;
							mid = 'M' + no;
						}
						$('#mid').val(mid);
					} else {
						mid = 'M1';
						$('#mid').val(mid);
					}
				}
			});
		});

		// enable dropdown criteria
		$('#aid').on('change', function() {
			$('#cid').removeAttr('disabled');
		});

		// funtion add mapping
		$('#form-input-mapping').on('submit', function(event) {
			event.preventDefault();

			const $form = $(event.currentTarget);
			const $mid = $('#mid');
			const $aid = $('#aid');
			const $cid = $('#cid');
			const $weight = $('#weight');

			$.ajax({
				url: "<?php echo base_url('users/mapping/add'); ?>",
				type: "post",
				dataType: "json",
				data: $form.serialize(),
				success: function(response) {
					debugger
					if (response !== true) {
						g_alert = response;
						warningAlert();
					} else {
						$mid.val('');
						$aid.val('').change();
						$cid.val('').change();
						$weight.val('').change();

						$cid.attr('disabled', true);

						$('#modal-input-mapping').modal('hide');

						g_alert = 'save successfull!';
						successAlert();
						loadData();
					}
				}
			});

			return false;
		});

		// function edit mapping
		$('#list-mapping').on('click', '.edit-row', function() {
			debugger
			$('#modal-edit-mapping').modal('show');

			$("#e_mid").val($(this).data('mid'));
			$("#e_aid").val($(this).data('aid')).change();
			$("#e_cid").val($(this).data('cid')).change();
			$("#e_weight").val($(this).data('weight')).change();

			// set default value for reset form edit (global variable)
			g_mid = $(this).data('mid');
			g_aid = $(this).data('aid');
			g_cid = $(this).data('cid');
			g_weight = $(this).data('weight');
		});

		// update mapping
		$('#form-edit-mapping').on('submit', function(event) {
			event.preventDefault();

			const $mid = $('#e_mid');
			const $aid = $('#e_aid');
			const $cid = $('#e_cid');
			const $weight = $('#e_weight');

			const data = {
				mid: $mid.val(),
				aid: $aid.val(),
				cid: $cid.val(),
				weight: $weight.val()
			}

			$.ajax({
				url: "<?php echo base_url('users/mapping/edit'); ?>",
				type: "post",
				dataType: "json",
				data: data,
				success: function(response) {
					debugger
					if (response !== true) {
						g_alert = response;
						warningAlert();
					} else {
						$mid.val('');
						$aid.val('').change();
						$cid.val('').change();
						$weight.val('').change();

						$('#modal-edit-mapping').modal('hide');

						g_alert = 'update successfull!';
						successAlert();
						loadData();
					}
				}
			});

			return false;
		});

		// function delete mapping
		$('#list-mapping').on('click', '.delete-row', function() {
			// set default value mid for delete data mapping (global variable)
			let mid = $(this).data('mid');
			$('#modal-delete-mapping').modal('show');
			$('#id-mapping').val(mid);
		});

		// delete mapping
		$('#form-delete-mapping').on('submit', function(event) {
			event.preventDefault();

			const $mid = $('#id-mapping').val();

			$.ajax({
				url: "<?php echo base_url('users/mapping/delete/'); ?>" + $mid,
				type: "post",
				dataType: 'json',
				data: {
					mid: $mid
				},
				success: function(response) {
					// reset id-mapping filed value
					$('#' + $mid).remove();
					$('id-mapping').val("");

					$('#modal-delete-mapping').modal('hide');

					if (response !== true) {
						g_alert = response;
						errorAlert();
					} else {
						g_alert = 'delete successfull!';
						successAlert();
						loadData();
					}

				}
			});
		});

		// function reset form input mapping
		$('#reset').on('click', function() {
			//set default
			$('#aid').val("").change();
			$('#cid').val("").change();
			$('#weight').val("").change();

			$('#cid').attr('disabled', true);
		});

		// function reset form edit mapping
		$('#e_reset').on('click', function() {
			//set default
			debugger
			$('#e_aid').val(g_aid).change();
			$('#e_cid').val(g_cid).change();
			$('#e_weight').val(g_weight).change();
		});

		// function load list section data
		function loadData() {
			const $table = $('#example2');
			const $listMapping = $('#list-mapping');

			$.ajax({
				url: "<?php echo base_url('users/mapping/listmap'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					if (response.length > 0) {
						const rows = response.map((item, i) => `
							<tr>
								<td>${i + 1}</td>
								<td>${item.mid}</td>
								<td>${item.aid + ' | ' + item.anm}</td>
								<td>${item.cid + ' | ' + item.cnm}</td>
								<td>${item.weight}</td>
								<td>
									<a href="javascript:void(0);" class="btn btn-sm p-0 edit-row"
									data-mid="${item.mid}"
									data-aid="${item.aid}"
									data-anm="${item.anm}"
									data-cid="${item.cid}"
									data-cnm="${item.cnm}"
									data-weight="${item.weight}">
										<i class="fas fa-edit"></i>
									</a> |
									<a href="javascript:void(0);" class="btn btn-sm p-0 delete-row" data-mid="${item.mid}">
										<i class="fas fa-trash"></i>
									</a>
								</td>
							</tr>
						`).join('');

						$table.DataTable().destroy();
						$listMapping.html(rows);

						/**@abstract
						 * default datatables setting
						 */
						const table = $table.DataTable({
							pagging: true,
							lengthChange: true,
							searching: true,
							ordering: true,
							info: true,
							autoWidth: true,
							responsive: false,
							scrollY: 450,
							scrollX: true,

							/**@abstract
							 * set load data in current page: datatable pagination load   
							 */
							"bStateSave": true,
							"fnStateSave": function(oSettings, oData) {
								localStorage.setItem('offersDataTables', JSON.stringify(oData));
							},
							"fnStateLoad": function(oSettings) {
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
						$listMapping.html(null);

						/**@abstract
						 * default datatable setting
						 */
						const table = $table.DataTable({
							paging: true,
							lengthChange: true,
							searching: false,
							ordering: true,
							info: true,
							autoWidth: true,
							responsive: false,
							scrollX: true,
						});

						// add button wrapper in datatable
						table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

					}
				}
			});
		}

		// dropdown list alternative
		function loadDropAlt() {
			$.ajax({
				url: "<?php echo base_url('users/alternative/listalternative'); ?>",
				async: true,
				dataType: 'json'
			}).done(function(response) {
				let options = '<option value="" selected disabled>-- Option --</option>';

				if (response.length > 0) {
					options += response.map(alternate =>
						`<option value="${alternate.aid}">${alternate.aid} | ${alternate.name}</option>`
					).join("");
				}

				$('#aid, #e_aid').html(options).val("");

			}).fail(function(jqXHR, textStatus, errorThrown) {
				console.error("Error fetching alternative:", errorThrown);
			});
		}

		// dropdown list criteria
		function loadDropCri() {
			$.ajax({
				url: "<?php echo base_url('users/criteria/listcriteria'); ?>",
				async: true,
				dataType: 'json'
			}).done(function(response) {
				let options = '<option value="" selected disabled>-- Option --</option>';

				if (response.length > 0) {
					options += response.map(criterion =>
						`<option value="${criterion.cid}">${criterion.cid} | ${criterion.name}</option>`
					).join("");
				}

				$('#cid, #e_cid').html(options).val("");

			}).fail(function(jqXHR, textStatus, errorThrown) {
				console.error("Error fetching criteria:", errorThrown);
			});
		}

		// // dropdown list range value (weight)
		function loadRangeVal() {
			$.ajax({
				url: "<?php echo base_url('users/weight/listweight'); ?>",
				async: true,
				dataType: 'json'
			}).done(function(response) {
				let options = '<option value="" selected disabled>-- Option --</option>';

				if (response.length > 0) {
					options += response.map(weights =>
						`<option value="${weights.value}">${weights.value}</option>`
					).join("");
				}

				$('#weight, #e_weight').html(options).val("");

			}).fail(function(jqXHR, textStatus, errorThrown) {
				console.error("Error fetching range values:", errorThrown);
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