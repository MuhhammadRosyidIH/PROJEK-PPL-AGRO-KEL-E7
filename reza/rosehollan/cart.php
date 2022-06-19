<?php

require "config/constants.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Rosehollan</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 12vh; opacity: 0.85;">
    <div class="container-fluid">
      <a class="navbar-brand"
        style="cursor: default; color: crimson; padding-left: 50px; margin-right: 280px; font-size: 25px;"><strong>RoseHollan</strong></a>
      <a href="index_logged.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600; color: crimson;">Beranda</a>
      <a href="product_logged.php" class="navbar-brand hover-select"
        style="cursor: Pointer; font-size: 17px; font-weight: 600; color: crimson;">Katalog</a>
      <a href="about_logged.php" class="navbar-brand nav-now"
        style="cursor: pointer; font-size: 17px; font-weight: 600; color: crimson;">Tentang</a>
      <a href="contact_logged.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600; color: crimson;">Kontak</a>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end ms-auto">
        <a href="cart.php" class="navbar-brand hover-select"
          style="cursor: pointer; font-size: 17px; font-weight: 600; color: crimson;">Pesanan saya</a>
        <a href=".php"><i class="bi bi-person-fill" style='color:crimson; font-size:20px; margin-right: 50px;'></i></a>
      </div>
    </div>
  </nav>
	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Keranjang saya</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Price</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = 'Rp';</script>
</body>	
</html>
















		