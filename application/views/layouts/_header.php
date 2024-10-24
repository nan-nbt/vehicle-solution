<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<!-- <li class="nav-item d-none d-sm-inline-block">
			<a href="#" class="nav-link" onclick="alert('Instagram: @nan_nbt')">Contact</a>
		</li> -->
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Profile Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="far fa-user"></i>
				<?php if ($this->session->userdata('fullname') != null) {
					echo $this->session->userdata('fullname');
				} ?>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">Profile</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-user mr-2"></i> Fullname
					<span class="float-right text-muted text-sm"><?php echo substr($this->session->userdata('fullname'), 0, 15); ?></span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-lock mr-2"></i> Level
					<span class="float-right text-muted text-sm"><?php echo $this->session->userdata('level'); ?></span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="<?php echo base_url('users/log/logout'); ?>" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
			</div>
		</li>
		<!-- ./ Profile Dropdown Menu -->
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
