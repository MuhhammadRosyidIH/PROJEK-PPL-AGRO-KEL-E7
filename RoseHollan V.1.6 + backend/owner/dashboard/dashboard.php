<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Sign Un Rose Hollan</title>
</head>
<body>

    <!-- KONTENG -->
    <!-- Navbar samping -->
    <div class="left fixed-top" align="center" style="background-color: crimson; width: 22.5%; height: 100vh; ">
        <div class="row" style="margin-top: 20px;">
            <a class="navbar-brand" style="cursor: default; color: whitesmoke; font-size: 25px;"><strong>RoseHollan</strong></a>
            <div class="row" align="left" style="padding-left: 70px;">
                <a href="dashboard.php" class="navbar-brand nav-now" style="margin-top: 60px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-person-fill me-2"></i> Akun</a>
                <a href="../katalog/katalog.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-shop-window me-2"></i> Katalog</a>
                <a href="../pesanan/pesanan.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-bag me-2"></i> Pesanan</a>
                <a href="../ulasan/ulasan.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-chat-left-text me-2"></i> Ulasan</a>
                <a href="../pencatatan/pencatatan.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-journal-medical me-2"></i> Pencatatan</a>
                <a href="../produksi/produksi.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-journal-album me-2"></i> Produksi</a>
            </div>
        </div> 
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 12vh; opacity: 0.85; margin-left: 22.5%;">
        <div class="ms-auto" style="margin-right: 50px;">
            <i class="bi bi-person-circle fs-1"></i>
        </div>
    </nav>

    <!-- KONTENG -->
    <div style="margin-top: 80px; margin-left: 22.5%; color: crimson; ">
        <div style="margin-bottom: 125px;"></div>  
        <div class="card" align="center" style="width: 80%; margin-left: 9.5%;">
            <div class="card-body" style="margin-top: 20px;">
                <span style="cursor: default; font-size: 25px;"><strong>Welcome, RoseHollan Admin!</strong></span>
                <div class="garis-bawah" style="height: 4.5px; width: 375px; margin-top: 5px; background-color: crimson;"></div>
                <div style="color: black;">
                    <h5 align="left" style="margin-top: 45px; margin-left: 35px;"><i>Nama Admin</i><span style="margin-left: 65px;">:</span></h5>
                    <h5 align="left" style="margin-top: 25px; margin-left: 35px;"><i>Alamat</i><span style="margin-left: 118px;">:</span></h5>
                    <h5 align="left" style="margin-top: 25px; margin-left: 35px;"><i>No. Handphone</i><span style="margin-left: 43.5px;">:</span></h5>
                    <h5 align="left" style="margin-top: 25px; margin-left: 35px;"><i>Email</i><span style="margin-left: 135px;">:</span></h5>
                    <h5 align="left" style="margin-top: 25px; margin-left: 35px;"><i>Sosial Media</i><span style="margin-left: 73px;">:</span></h5>
                </div>
                <div align="right" style="margin-top: 45px; margin-right: 45px; margin-bottom: 10px;">
                    <a href="../logoutadmin.php"><button type="submit" style="width: 90px;" class="btn btn-danger">Logout</button></a>
                </div>
            </div>
        </div>      
    </div>
    

</body>
</html>