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
<html>
<head>
 <title>Melihat Laporan </title>
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
		<link href="../css/lihatlaporan.css" rel="stylesheet">

</head>
<body style="text-align:center">
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
                            <li class="active"><a href="">HOME</a></li>
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
			<br>
			<br>
 <h1>Pengaduan</h1><hr />
 <table style="width:100%" class="table1">
  <tr>
	<th>NO</th>
	<th>NIK</th>
	<th>Nama</th>
	<th>Tanggal Masuk</th>
	<th>Isi Laporan</th>
	<th>Foto</th>
    <th>Tanggapan</th>
	<th>Status</th>
	<!-- <th>OPSI</th> -->
  </tr>
  
  <?php 
			$no=1;
			$pengaduan = mysqli_query($koneksi,"SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik=masyarakat.nik  LEFT JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan 
            ORDER BY pengaduan.tgl_pengaduan DESC ");
			while ($r=mysqli_fetch_assoc($pengaduan)) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
						<td><?php echo $r['nik']; ?></td>
						<td><?php echo $r['nama']; ?></td>
						<td><?php echo $r['tgl_pengaduan']; ?></td>
						<td><?php echo $r['isi_laporan']; ?></td>
						<td><?php echo "<img src='../img/$r[foto]' width='70' height='90' />";?></td>	
                        <td><?php echo $r['tanggapan']; ?></td>
						<td><?php echo $r['status']; ?></td>
						<td>

				</td>
			</tr>
            
			<?php 
		}
		?>
 </table> 
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
                                - <br>
                                mochamadrizalseftian@gmail.com <br>
                            </p>
                        </div>
                    </div>
                </footer>
                <!-- /footer -->

               
        </div>
</body>
</html>