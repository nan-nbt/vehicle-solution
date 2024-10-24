<!-- Session login check -->
<?php if ($this->session->userdata('fullname') == null && $this->session->userdata('email') == null) {
	redirect(base_url('users/log'));
} ?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/vehicle-logo.png" alt="vehicle-logo" class="brand-image bg-white img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Vehicle Solution</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<?php if ($this->session->userdata('level') == '1') : ?>
					<li class="nav-header">BASIC DATA SETTING</li>
					<li class="nav-item <?php if (base_url(uri_string()) == base_url('users/criteria') || base_url(uri_string()) == base_url('users/alternative')) {
											echo 'menu-open';
										} ?>">
						<a href="#" class="nav-link <?php if (base_url(uri_string()) == base_url('users/criteria') || base_url(uri_string()) == base_url('users/alternative')) {
														echo 'active';
													} ?>">
							<i class="nav-icon fas fa-cog"></i>
							<p>
								Basic Data
								<i class="fas fa-angle-left right"></i>
								<!-- <span class="badge badge-info right">5</span> -->
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?php echo base_url('users/alternative'); ?>" class="nav-link <?php if (base_url(uri_string()) == base_url('users/alternative')) {
																											echo 'active';
																										}
																										?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage Data Alternative</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('users/criteria'); ?>" class="nav-link <?php if (base_url(uri_string()) == base_url('users/criteria')) {
																										echo 'active';
																									} ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage Data Criteria</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('users/mapping'); ?>" class="nav-link <?php if (base_url(uri_string()) == base_url('users/mapping')) {
																										echo 'active';
																									} ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>Mapping Alternatif Criteria</p>
								</a>
							</li>
						</ul>
					</li>
				<?php else : ?>
					<li class="nav-header">INFORMATION</li>
					<li class="nav-item">
						<a href="<?php echo base_url('users/alternative/viewalternative'); ?>" class="nav-link
                    <?php
					if (base_url(uri_string()) == base_url('users/alternative/viewalternative')) {
						echo 'active';
					}
					?>">
							<i class="nav-icon fas fa-star"></i>
							<p>List Alternative</p>
						</a>
					</li>
					<li class="nav-header">TOPSIS METHOD</li>
					<li class="nav-item">
						<a href="<?php echo base_url('users/topsis'); ?>" class="nav-link
                    <?php
					if (base_url(uri_string()) == base_url('users/topsis')) {
						echo 'active';
					}
					?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>Analysis</p>
						</a>
					</li>
				<?php endif; ?>
				<li class="nav-header">ABOUT SYSTEM</li>
				<li class="nav-item">
					<a href="<?php echo base_url('users/about'); ?>" class="nav-link
											<?php
											if (base_url(uri_string()) == base_url('users/about')) {
												echo 'active';
											}
											?>">
						<i class="nav-icon fas fa-info"></i>
						<p>Version App</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('users/about/about'); ?>" target="_whatsapp" class="nav-link
											<?php
											if (base_url(uri_string()) == base_url('users/about/about')) {
												echo 'active';
											}
											?>">
						<i class="nav-icon fas fa-phone"></i>
						<p>Contact Us</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>