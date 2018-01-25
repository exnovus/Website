<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div class="wrapper">
						<div class="inner">

							<?php $this->load->view('header');?>
							<?php $this->load->view('nav');?>
							<?php $this->load->view('landing/banner');?>

						</div>
					</div>

					<!-- Wrapper -->
						<div class="wrapper">
							<div class="inner">

								<?php $this->load->view('landing/aboutus');?>
								<?php $this->load->view('landing/projects');?>

							</div>
						</div>

						<!-- Wrapper -->
							<div class="wrapper">
								<div class="inner">

									<?php $this->load->view('landing/contact');?>
									<?php $this->load->view('footer');?>

								</div>
							</div>

					</div>

				<!-- Scripts -->
					<script src="<?= base_url() ?>application/assets/js/jquery.min.js"></script>
					<script src="<?= base_url() ?>application/assets/js/skel.min.js"></script>
					<script src="<?= base_url() ?>application/assets/js/util.js"></script>
					<script src="<?= base_url() ?>application/assets/js/main.js"></script>

	</body>
