<?php
require "config/constants.php";
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/katalog.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>RoseHollan</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 12vh; opacity: 0.85;">
    <div class="container-fluid">
      <a class="navbar-brand"
        style="cursor: default; color: crimson; padding-left: 50px; margin-right: 280px; font-size: 25px;"><strong>RoseHollan</strong></a>
      <a href="index.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Beranda</a>
      <a href="product.php" class="navbar-brand nav-now"
        style="cursor: Pointer; font-size: 17px; font-weight: 600;">Katalog</a>
      <a href="about.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Tentang</a>
      <a href="contact.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Kontak</a>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end ms-auto">
        <a href="customer_registration.php?register=1">
          <button type="button" class="btn btn-danger me-md-3" style="width: 100px;">Sign up</button>
        </a>
        <a href="customer_login.php">
          <button type="button" class="btn btn-outline-danger me-md-5" style="width: 100px;">Sign in</button>
        </a>
      </div>
    </div>
  </nav>
    
    <!-- KONTEN -->
    <div class="title-introduction-1">
      <div>
        <h2 style="text-align: center; width: 100%; cursor: default; color:crimson; font-size: 40px; font-weight: 700; padding-top: 120px;">Katalog Produk RoseHollan</h2>
        <p style="text-align: center; width: 100%; padding-top: 30px; padding-left: 15%; padding-right: 15%; color: crimson;">Halaman ini menampilkan katalog produk unggulan terbaik yang siap dipesan kapanpun kamu mau. Produksi lokal olahan mawar yang telah disortir, sehingga menyajikan produk terbaik siap santap untuk menemani harimu. Dengan kualitas baik dan mutu terjamin kami siap mengirim hingga pelosok negri maupun luar negri. </p>
      </div>
      <div class="container" style="margin-top: 50px; padding-bottom: 100px; width: 80%;">
        <div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg"></div>
				</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">Rs.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div></div>
				</div>
      </div>
      
    </div>

      <!-- FOOTER -->
    <div class="bot-footer" >
      <br>
      <H1 style="text-align: center; font-size: 40px; font-weight: 600; color: whitesmoke;">Lengkapi harimu dengan olahan mawarku !</H1>
      <br><br><br>
      <h6 style="text-align: center; font-size: 10px; font-weight: 400; color: whitesmoke;">copyright @ 2022 PPL-E7</h6>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>