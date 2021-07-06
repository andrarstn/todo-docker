<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title ?></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/sb_shop/') ?>css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') ?>style.css">
    </head>
    <body class="bg-secondary">

    <div class="container my-5">
      <div class="row">
          <div class="col-sm-6 col-md-4 mx-auto p-4">
            <?php 
                echo $this->session->flashdata('msg')
            ?>
          </div>
      </div>
		<div class="row">
			<div class="col-sm-6 col-md-4 mx-auto bg-light p-4 login">
				<h3 class="text-center mb-30 title_color border-bottom">REGISTER</h3>
				<form action="<?php echo base_url('register/') ?>action" method="post" enctype="multipart/form-data">
					<div class="mt-10">
						<input type="text" placeholder="Nama" name="nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required class="single-input-primary">
					</div>
					<div class="mt-10">
						<input type="text" placeholder="Username" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required class="single-input-primary">
					</div>
					<div class="mt-10">
						<input type="password" placeholder="Password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input-primary">
					</div>
					<div class="mt-10">
						<input type="password" placeholder="Confirm Password" name="confirm" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required class="single-input-primary">
                    </div>
                    <div class="mt-10">
                        <input type="submit" class="btn main_btn btn-block" name="submit">
                    </div>
					<hr>
					<div class="text-center">
						Sudah punya akun? <a href="<?php echo base_url() ?>login">Login disini.</a><br>
					</div>
				</form>
			</div>
		</div>
	</div>

      <!-- Footer -->
  <footer class="py-3 mt-5 fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/sb_shop/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/sb_shop/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>