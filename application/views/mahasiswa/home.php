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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a>Sistem Informasi Evaluasi Dosen</a></strong> </h1>
				<nav id="nav">
					<ul>
					<li><a href="<?php echo base_url('mahasiswa/home/logout');?>">Logout</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
				
				<?php
                    if (validation_errors() || $this->session->flashdata('isi_form')) {
                        ?>
                        <div class="alert alert-success">
						<a class="button alt fit"><h2>INFO! 
                            <?php echo validation_errors(); ?>
							<?php echo $this->session->flashdata('isi_form'); ?>
							</h2></a>
						
                        </div>
					<?php } ?>

					<?php
                    if (validation_errors() || $this->session->flashdata('gagal_isi_form')) {
                        ?>
                        <div class="alert alert-danger">
						<a class="button special fit"><h2><strong>Warning! 
                            <?php echo validation_errors(); ?>
							<?php echo $this->session->flashdata('gagal_isi_form'); ?>
							</strong></h2></a>
                        </div>
					<?php } ?>

				<h4>Selamat Datang : <?php echo $this->session->userdata("user_name") ?></h4>

					<header class="major special">

					<h2>Formulir Evaluasi Dosen</h2>
						<p>Silakan isi formulir berikut</p>
					</header>
					
					<form method="post" action="mahasiswa/home/form_isi">
						<div class="row uniform 50%">
					<h3>Nim</h3>
						<div class="12u$">
							<input type="text" name="nim" id="nim" value="<?php echo $this->session->userdata("user_id") ?>" placeholder="NIM" /> 
						</div>
					<h3>Nama</h3>
						<div class="12u$">
							<input type="text" name="nama" id="nama" value="<?php echo $this->session->userdata("user_name") ?>" placeholder="Nama" /> 
						</div>
					<h3>Semester</h3>
							<div class="12u$">
								<div class="select-wrapper">
									<select name="smt" id="smt">
										<option>- Semester -</option>
										<?php
											foreach ($smt->result() as $baris) {
									
												echo "<option value=".$baris->semester.">".$baris->semester."</option>";
											}
										?>
									</select>
								</div>
							</div>
					<h3>Dosen</h3>
							<div class="12u$">
								<div class="select-wrapper">
									<select name="dosen" id="dosen">
										<option>- Dosen -</option>
										<?php
											foreach ($dosen->result() as $baris) {
									
												echo "<option value=".$baris->dosen.">".$baris->dosen."</option>";
											}
										?>
									</select>
								</div>
							</div>
					<h3>Nama Mata Kuliah</h3>
							<div class="12u$">
								<div class="select-wrapper">
									<select name="matkul" id="matkul">
										<option>- Nama Mata Kuliah -</option>
										<?php
											foreach ($matkul->result() as $baris) {
									
												echo "<option value=".$baris->matkul.">".$baris->matkul."</option>";
											}
										?>
									</select>
								</div>
							</div>
							<div class="6u$ 12u$(xlarge)">								
								<h3>Pernyataan :</h3>
								<h5>Keterangan Nilai : <p>Sangat Tidak Setuju 1 - 5 Sangat Setuju</p></h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>No.</th>
											<th>Pernyataan</th>
											<th>Nilai</th>
										</tr>
									</thead>
									<tbody>
									<?php 
                                                $no = 1;
                                                foreach($pernyataan as $p){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $p->teks_pernyataan ?></td>
                                                    <td>
														<div class="12u$">
															<div class="select-wrapper">
																<select name="nilai" id="nilai" onchange="findTotal()">
																	<option value="0">- Nilai -</option>
																	<?php
																		foreach ($nilai->result() as $baris) {
																
																			echo "<option value=".$baris->nilai.">".$baris->nilai."</option>";
																		}
																	?>
																</select>
															</div>
														</div>
													</td>
                                                </tr>
                                                <?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>
												Total Nilai :
												<div class="12u$">
													<input type="text" name="totalnilai" id="totalnilai" value="" placeholder="Total Nilai" />
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
									<h3>Kritik, Saran dan Masukan</h3>
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Ketikan Kritik, Saran dan Masukan" rows="6"></textarea>
										</div>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Submit" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
							</div>
						</div>						
					</form>
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

			<script type="text/javascript">
			function findTotal(){
				var arr = document.getElementsByName('nilai');
				var tot=0;
				for(var i=0;i<arr.length;i++){
					if(parseInt(arr[i].value))
						tot += parseInt(arr[i].value);
				}
				document.getElementById('totalnilai').value = tot;
			}

    		</script>

	</body>
</html>