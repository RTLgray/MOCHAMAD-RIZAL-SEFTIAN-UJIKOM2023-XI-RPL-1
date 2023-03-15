<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Kontak | Website Pengaduaan Masyarakat</title>
    <link rel="shortcut icon" href="./img/icon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- Main Styles CSS -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

        <div class="shadow">
            <nav class="navbar navbar-fixed navbar-inverse form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="lapor">KONTAK</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right nav-link">
                            <li><a href="loginpage.php">LOGIN</a></li>
                            <li><a href="register.php">REGISTER</a></li>
                        </ul>   
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!-- content -->
            <div class="main-content">
                <h3>Kontak</h3>
                <hr/>

                <div id="map" class="card-shadow" style="width:50%;height:300px"></div>
                    <script>
                    function myMap() {
                          var mapCanvas = document.getElementById("map");
                          var myCenter = new google.maps.LatLng(-6.8733657,107.4904526);
                          var mapOptions = {center: myCenter, zoom: 18};
                          var map = new google.maps.Map(mapCanvas,mapOptions);
                          var marker = new google.maps.Marker({
                            position: myCenter,
                            animation: google.maps.Animation.BOUNCE
                          });
                          marker.setMap(map);
                    }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXyK9sf3rI0EKVupuALaOAzq1NKlUES98&callback=myMap"></script>
                <hr>
                <h4>Kantor</h4>
                <p>Jalan Cimerang 52 RT 01/05, Cimerang,</p>
                <p>Kec. Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553</p>
                <hr>
                <h4>Contact Info:</h4>
                <p>-</p>
                <p>-</p>
                <p>-</p>
                <p>&nbsp;</p>

            <!-- end main-content -->
            </div>

            <hr>

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

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>
</html>
