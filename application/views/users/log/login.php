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

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-primary">
			<div class="card-header text-center">
				<a href="#" class="h1"><b>Vehicle </b>Solution</a>
			</div>
			<div class="card-body card-primary card-outline card-outline-tabs">
				<!-- navbar tabs -->
				<div class="card-header border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Register</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-four-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
							<p class="login-box-msg">Sign in to start your session!</p>
							<form class="form-horizontal" id="form-login" method="POST">
								<div class="input-group mb-3">
									<input type="email" class="form-control" id="login_email" name="login_email" placeholder="Email" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-envelope"></span>
										</div>
									</div>
								</div>
								<div class="input-group mb-3">
									<input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password" required>
									<div class="input-group-append">
										<div class="input-group-text">
											<span class="fas fa-lock"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button type="submit" class="btn btn-primary btn-block float-right">Login</button>
									</div>
									<!-- /.col -->
								</div>
							</form>
							<!-- /.social-auth-links -->
						</div>
						<div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
							<form class="form-horizontal" id="form-register" method="POST">
								<div class="input-group mb-3">
									<div class="input-group mb-3">
										<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name" required>
										<div class="input-group-append">
											<div class="input-group-text">
												<span class="fas fa-user"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
										<div class="input-group-append">
											<div class="input-group-text">
												<span class="fas fa-envelope"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
										<div class="input-group-append">
											<div class="input-group-text">
												<span class="fas fa-lock"></span>
											</div>
										</div>
									</div>
									<div class="input-group mb-3">
										<input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Retype password" required>
										<div class="input-group-append">
											<div class="input-group-text">
												<span class="fas fa-lock"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<button type="submit" class="btn btn-primary btn-block float-right">Register</button>
									</div>
									<!-- /.col -->
								</div>
							</form>
							<!-- /.social-auth-links -->
						</div>
						<!-- /.content B -->
					</div>
					<!-- /.end content tabs -->
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.login-box -->

		<!-- Javascript -->
		<?php $this->load->view("layouts/_js.php") ?>

		<!-- Page specific script -->
		<script>
			let g_alert;

			// function submit login
			$('#form-login').submit('click', function() {
				debugger
				let login_email = $('#login_email').val();
				let login_password = $('#login_password').val();

				if (login_email !== null && login_password !== null) {
					$.ajax({
						url: "<?php echo base_url('users/log/login'); ?>",
						type: "post",
						dataType: "json",
						data: {
							login_email: login_email,
							login_password: login_password
						},
						success: function(response) {
							debugger
							if (response !== true) {
								g_alert = response;
								errorAlert();
								$('#login_password').trigger('focus');
							} else {
								window.location.replace('<?php echo base_url(); ?>');
							}
						}
					});
				}

				return false;
			});

			// function submit register
			$('#form-register').submit('click', function() {
				let fullname = $('#fullname').val();
				let email = $('#email').val();
				let password = $('#password').val();
				let retype_password = $('#retype_password').val();

				if (password !== retype_password) {
					g_alert = 'password not match!';
					warningAlert();

					$('#retype_password').trigger('focus');
				} else {
					$.ajax({
						url: "<?php echo base_url('users/log/register'); ?>",
						type: "post",
						dataType: "json",
						data: {
							fullname: fullname,
							email: email,
							password: password
						},
						success: function(response) {
							if (response !== true) {
								g_alert = response;
								warningAlert();
							} else {
								g_alert = 'registration successfull!'
								successAlert();

								$('#fullname').val('');
								$('#email').val('');
								$('#password').val('');
								$('#retype_password').val('');

								$('#custom-tabs-four-profile-tab').removeClass('active');
								$('#custom-tabs-four-profile').removeClass('active');
								$('#custom-tabs-four-profile').removeClass('show');
								$('#custom-tabs-four-profile-tab').attr('aria-selected', false);

								$('#custom-tabs-four-home-tab').addClass('active');
								$('#custom-tabs-four-home').addClass('active');
								$('#custom-tabs-four-home').addClass('show');
								$('#custom-tabs-four-home-tab').attr('aria-selected', true);
							}
						}
					});
				}

				return false;
			});

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