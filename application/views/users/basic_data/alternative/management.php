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
									<form class="form-horizontal" id="form-query-alternative">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group float-right">
													<label for="input-col" style="margin-top:13px;"></label>
													<button type="button" class="form-control btn btn-default" data-toggle="modal" data-target="#modal-input-alternative" id="add">
														<i class="fas fa-plus-circle"></i> Input Data Alternative
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
												<th>ALTERNATIVE ID</th>
												<th>NAME</th>
												<th>DESCRIPTION</th>
												<th>URL OFFICIAL WEB</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody id="list-alternative">
											<!-- Using JQuery Ajax to display data -->
										</tbody>
									</table>
								</div>
								<!-- /.card-body -->

								<!-- <div class="card-body">
									<table id="detail-example2" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
										<thead>
											<tr>
												<th>NO</th>
												<th>MAP ID</th>
												<th>CRITERIA ID</th>
												<th>NAME</th>
												<th>WEIGHT VAL</th>
											</tr>
										</thead>
										<tbody id="list-detail-alternative">

										</tbody>
									</table>
								</div> -->
								<!-- /.card-body -->

							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->

				<!-- Modal Form Input Data Alternative -->
				<div class="modal fade" id="modal-input-alternative">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Input Data Alternative</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-input-alternative" method="POST">
								<div class="modal-body">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="aid" class="col-form-label"><span class="text-danger">*</span>Alternative ID :</label>
													<input type="text" class="form-control" id="aid" name="aid" placeholder="Alternative ID" readonly required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="name" class="col-form-label"><span class="text-danger">*</span>Alternative Name :</label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Alternative Name" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="desc" class="col-form-label"><span class="text-danger">*</span>Description :</label>
													<input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="url" class="col-form-label"><span class="text-danger">*</span>URL Official Web :</label>
													<input type="text" class="form-control" id="url" name="url" placeholder="http://www.example.com" required>
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
									<button type="submit" class="btn btn-primary" id="submit-alternative">Submit</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- Modal Form Edit Data Alternative -->
				<div class="modal fade" id="modal-edit-alternative">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Edit Data Alternative</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-edit-alternative" method="POST">
								<div class="modal-body">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_aid" class="col-form-label"><span class="text-danger">*</span>Alternative ID :</label>
													<input type="text" class="form-control" id="e_aid" name="e_aid" placeholder="Alternative ID" readonly required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_name" class="col-form-label"><span class="text-danger">*</span>Alternative Name :</label>
													<input type="text" class="form-control" id="e_name" name="e_name" placeholder="Alternative Name" required>
												</div>
												<!-- /.form-group -->
											</div>
											<!-- /.col-md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="e_desc" class="col-form-label"><span class="text-danger">*</span>Description :</label>
													<input type="text" class="form-control" id="e_desc" name="e_desc" placeholder="Description" required>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label for="e_url" class="col-form-label"><span class="text-danger">*</span>URL Official Web :</label>
													<input type="text" class="form-control" id="e_url" name="e_url" placeholder="http://www.example.com" required>
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
									<button type="submit" class="btn btn-primary" id="update_alternative">Update</button>
								</div>
							</form>
							<!-- /.form -->
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				<!-- Modal Form Delete Data Alternative -->
				<div class="modal fade" id="modal-delete-alternative">
					<div class="modal-dialog modal-default">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Delete Alternative Data</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form class="form-horizontal" id="form-delete-alternative" method="POST">
								<div class="modal-body">
									<input type="hidden" class="form-control" id="id-alternative" name="id-alternative">
									<span>Are sure to delete this alternative data?</span>
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
		let g_aid, g_name, g_desc, g_url, g_alert;

		// declare global variable
		$(document).ready(function() {
			loadData();
		});

		// pace-progress when ajax request
		$(document).ajaxStart(function() {
			Pace.restart();
		});

		// function auto alternative id
		$('#add').on('click', function() {
			$.ajax({
				url: "<?php echo base_url('users/alternative/listalternative'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					let no, aid;
					if (response.length > 0) {
						for (let i = 0; i < response.length; i++) {
							no = parseInt(response[i].aid.substr(1, 3)) + 1;
							aid = 'A' + no;
						}
						$('#aid').val(aid);
					} else {
						$('#aid').val('A1');
					}
				}
			});
		});

		// funtion add alternative
		$('#form-input-alternative').on('submit', function(event) {
			event.preventDefault();

			const $form = $(event.currentTarget);
			const $aid = $('#aid');
			const $name = $('#name');
			const $desc = $('#desc');
			const $url = $('#url');

			$.ajax({
				url: "<?php echo base_url('users/alternative/add'); ?>",
				type: "post",
				dataType: "json",
				data: $form.serialize(),
				success: (response) => {
					if (response !== true) {
						g_alert = response;
						warningAlert();
					} else {
						$aid.val('');
						$name.val('');
						$desc.val('');
						$url.val('');

						$('#modal-input-alternative').modal('hide');

						g_alert = 'save successful!';
						successAlert();
						loadData();
					}
				}
			});
		});

		// function edit alternative
		$('#list-alternative').on('click', '.edit-row', function() {
			debugger
			$('#modal-edit-alternative').modal('show');

			$("#e_aid").val($(this).data('aid'));
			$("#e_name").val($(this).data('name'));
			$("#e_desc").val($(this).data('desc'));
			$("#e_url").val($(this).data('url'));

			// set default value for reset form edit (global variable)
			g_aid = $(this).data('aid');
			g_name = $(this).data('name');
			g_desc = $(this).data('desc');
			g_url = $(this).data('url');
		});

		// // update alternative
		$('#form-edit-alternative').on('submit', function(event) {
			event.preventDefault();

			const $aid = $('#e_aid');
			const $name = $('#e_name');
			const $desc = $('#e_desc');
			const $url = $('#e_url');

			const data = {
				aid: $aid.val(),
				name: $name.val(),
				desc: $desc.val(),
				url: $url.val()
			};

			$.ajax({
				url: "<?php echo base_url('users/alternative/edit'); ?>",
				type: "post",
				dataType: "json",
				data: data,
				success: function(response) {
					$aid.val('');
					$name.val('');
					$desc.val('');
					$url.val('');

					$('#modal-edit-alternative').modal('hide');

					if (response !== true) {
						g_alert = response;
						errorAlert();
					} else {
						g_alert = 'update successfull!';
						successAlert();
						loadData();
					}
				}
			});
		});

		// function delete alternative
		$('#list-alternative').on('click', '.delete-row', function() {
			// set default value aid for delete data alternative (global variable)
			const aid = $(this).data('aid');
			$('#modal-delete-alternative').modal('show');
			$('#id-alternative').val(aid);
		});

		// delete alternative
		$('#form-delete-alternative').on('submit', function(event) {
			event.preventDefault();

			const $aid = $('#id-alternative').val();

			$.ajax({
				url: "<?php echo base_url('users/alternative/delete/'); ?>" + $aid,
				type: 'post',
				dataType: 'json',
				data: {
					aid: $aid
				},
				success: function(response) {
					$('#' + $aid).remove();
					$('#id-alternative').val('');

					$('#modal-delete-alternative').modal('hide');

					if (response !== true) {
						g_alert = response;
						errorAlert();
					} else {
						g_alert = 'delete successful!';
						successAlert();
						loadData();
					}
				},
				error: function(xhr, status, error) {
					$('#' + $aid).remove();
					$('#id-alternative').val('');

					$('#modal-delete-alternative').modal('hide');

					if (xhr.status === 500) {
						debugger
						let errorMessage = xhr.responseText;

						g_alert = errorMessage;
						errorAlert();
					}
				}
			});
		});

		// function reset form input alternative
		$('#reset').on('click', function() {
			//set default
			$('#name').val("");
			$('#desc').val("");
			$('#url').val("");
		});

		// // function reset form edit alternative
		$('#e_reset').on('click', function() {
			//set default
			$('#e_name').val(g_name);
			$('#e_desc').val(g_desc);
			$('#e_url').val(g_url);
		});

		// function load data
		function loadData() {
			const $table = $('#example2');
			const $listAlternative = $('#list-alternative');

			$.ajax({
				url: "<?php echo base_url('users/alternative/listalternative'); ?>",
				async: true,
				dataType: 'json',
				success: function(response) {
					if (response.length > 0) {
						const rows = response.map((item, i) => `
							<tr>
								<td>${i + 1}</td>
								<td>${item.aid}</td>
								<td>${item.name}</td>
								<td>${item.description}</td>
								<td>${item.url}</td>
								<td>
									<a href="javascript:void(0);" class="btn btn-sm p-0 edit-row"
									data-aid="${item.aid}"
									data-name="${item.name}"
									data-desc="${item.description}"
									data-url="${item.url}">
										<i class="fas fa-edit"></i>
									</a> |
									<a href="javascript:void(0);" class="btn btn-sm p-0 delete-row" data-aid="${item.aid}">
										<i class="fas fa-trash"></i>
									</a>
								</td>
							</tr>
						`).join('');

						$table.DataTable().destroy();
						$listAlternative.html(rows);

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
						$listAlternative.html(null);

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