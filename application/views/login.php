<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sistem Informasi Evaluasi Dosen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url('assets/assets/css/main.css');?>" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="<?php echo base_url('');?>">Sistem Informasi Evaluasi Dosen</a></strong> </h1>
				<nav id="nav">
					<ul>
                    <!--<li><a href="#">Home</a></li>-->
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Login</h2>
						<p>Silakan masukan id user dan password anda</p>
					</header>
					<form method="post" action="<?php echo base_url('Login');?>">
					<?php if(isset($error)) { echo $error; }; ?>
						<div class="row uniform 50%">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="iduser" id="iduser" value="" placeholder="ID User" required autofocus> <?php echo form_error('iduser'); ?>
                                </p>
								<input type="password" name="password" id="password" value="" placeholder="Password" required> <?php echo form_error('password'); ?>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input type="submit" value="Login" class="special" /></li>
								</ul>
							</div>
                        </div>
					</form>
					<h4>INFO!</h4>
							<blockquote>Dosen silakan menggunakan NIP dan Password 00000000 (Angka nol 8x)</blockquote>
							<blockquote>Bagi Mahasiswa Silakan Login menggunakan NIM masing - masing dan untuk Password silakan gunakan 00000000 (Angka nol 8x)</blockquote>
				</div>
			</section>

		<!-- Footer -->
        <footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
			<script src="<?php echo base_url('assets/assets/js/skel.min.js');?>"></script>
			<script src="<?php echo base_url('assets/assets/js/util.js');?>"></script>
			<script src="<?php echo base_url('assets/assets/js/main.js');?>"></script>

	</body>
</html>