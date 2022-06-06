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
                <a href="../dashboard/dashboard.php" class="navbar-brand hover-select" style="margin-top: 60px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-person-fill me-2"></i> Akun</a>
                <a href="../katalog/katalog.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-shop-window me-2"></i> Katalog</a>
                <a href="../pesanan/pesanan.php" class="navbar-brand hover-select" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-bag me-2"></i> Pesanan</a>
                <a href="ulasan.php" class="navbar-brand nav-now" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-chat-left-text me-2"></i> Ulasan</a>
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
        <div style="margin-bottom: 100px;"></div>  
        <div class="card" align="center" style="width: 95%; margin-left: 2.5%;">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Customer</th>
                        <th scope="col">Isi Ulasan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>2007060201</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>2007060202</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>2007060203</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>      
    </div>
    
    

    

</body>
</html>