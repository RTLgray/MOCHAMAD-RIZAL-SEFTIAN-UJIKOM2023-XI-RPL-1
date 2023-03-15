	<?php 
		session_start();
		error_reporting(0);
		include '../conn/koneksi.php';
		if(!isset($_SESSION['username'])){
			header('location:../index.php');
		}
		elseif($_SESSION['level'] != "masyarakat"){
			header('location:../index.php');
		}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="icon" href="../img/icon.jpg">
		<title>Halaman membuat laporan</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="images/favicon.ico">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<!-- font Awesome CSS -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<!-- Main Styles CSS -->
		<link href="../css/style.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="../js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.js"></script>
		<!--CSS untuk Animasi slide -->
		<link rel="stylesheet" href="./css/animate.min.css">
		<!-- css untuk form pengaduan -->
		<link href="../css/laporan.css" rel="stylesheet">

	</head>
	<body>

	<div class="shadow">
            <!-- navbar -->
            <nav class="navbar navbar-inverse navbar-fixed form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                          
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-link">
                            <li class="active"><a href="index.php">HOME</a></li>
                            <li><a href="membuat_laporan.php">PENGADUAN</a></li>
                            <li><a href="lihat_laporan.php">LIHAT PENGADUAN</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right nav-link">
                            <li><a href="../index.php?p=logout">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
			<br>
			<!-- kode untuk form pengisian pengaduan atau laporan -->
			<tr>
				<td>
					<h4 class="orange-text hide-on-med-and-down">Tulis Laporan</h4>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					<form method="POST" enctype="multipart/form-data">
						<h1>Laporan</h1>
						<textarea class="materialize-textarea" name="laporan" placeholder="Tulis Laporan"></textarea><br><br>
						<label>Gambar</label>
						<input type="file" name="foto"><br><br>
						<input type="submit" name="kirim" value="Kirim" class="btn">
					</form>
				</td>
			</tr>
		
	<?php 
		session_start();
		// koneksi ke database dilakukan di sini, atau di file terpisah yang di-include ke halaman ini

		// cek apakah tombol kirim sudah di klik
		if(isset($_POST['kirim'])){
			$nik = $_SESSION['data']['nik'];
			$tgl = date('Y-m-d');
			$foto = $_FILES['foto']['name'];
			$source = $_FILES['foto']['tmp_name'];
			$folder = './../img/';
			$listeks = array('jpg','png','jpeg');
			$pecah = explode('.', $foto);
			$eks = $pecah['1'];
			$size = $_FILES['foto']['size'];
			$nama = date('dmYis').$foto;

			if($foto !=""){
				if(in_array($eks, $listeks)){
					if($size<=10000000){ //kode untuk mengatur batas size image//
						move_uploaded_file($source, $folder.$nama);
						$query = mysqli_query($koneksi,"INSERT INTO pengaduan VALUES (NULL,'$tgl','$nik','".$_POST['laporan']."','$nama','proses')");

						if($query){
							echo "<script>alert('Pengaduan Akan Segera di Proses')</script>";
							echo "<script>location='index.php';</script>";
						}
					}
					else{
						echo "<script>alert('Ukuran Gambar Tidak Lebih Dari 10mb')</script>";
					}
				}
				else{
					echo "<script>alert('Format File Tidak Didukung')</script>";
				}
			}
			else{
				$query = mysqli_query($koneksi,"INSERT INTO pengaduan VALUES (NULL,'$tgl','$nik','".$_POST['laporan']."','noImage.png','proses')");
				if($query){
					echo "<script>alert('Pengaduan Akan Segera Ditanggapi')</script>";
					echo "<script>location='index.php';</script>";
				}
			}
		}
	?>
                        <div class="col-md-1"></div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- /.section -->

            <!-- Footer -->
            <footer class="footer text-center">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="fa fa-top fa-map-marker"></i>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Kantor</h4>
                            </li>
                        </ul>
                        <p class="mb-0">
						Jalan Cimerang 52 RT 01/05, Cimerang,
                            <br> Kec. Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553
                        </p>
                        </div>
                        <div class="col-md-4 mb-5 mb-lg-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="fa fa-top fa-rss"></i>
                                </li>
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Sosial Media</h4>
                                </li>
                            </ul>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fa fa-fw fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fa fa-fw fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="fa fa-top fa-envelope-o"></i>
                                </li>
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Kontak</h4>
                                </li>
                            </ul>
                            <p class="mb-0">
                                08976645645 <br>
                                 <br>
                                
                            </p>
                        </div>
                    </div>
                </footer>
                <!-- /footer -->

               
        </div>

			
	</body>
	</html> 