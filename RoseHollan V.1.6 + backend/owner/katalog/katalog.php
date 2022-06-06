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
  <!-- modal script extension -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                <a href="katalog.php" class="navbar-brand nav-now" style="margin-top: 20px; cursor: pointer; font-size: 20px; font-weight: 600;"><i class="bi bi-shop-window me-2"></i> Katalog</a>
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
        <div style="margin-bottom: 100px;"></div>  
        <div class="card" align="center" style="width: 95%; margin-left: 2.5%;">
            <div class="card-body">
                <div align="right" style="margin-top: 10px; margin-right: 45px; margin-bottom: 10px;">
                    <a class="btn btn-danger" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Teh Mawar</td>
                        <td>25000</td>
                        <td>50</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Sirup Mawar</td>
                        <td>25000</td>
                        <td>50</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Nugget Mawar</td>
                        <td>25000</td>
                        <td>50</td>
                        <td><a href=""><button type="button" class="btn btn-primary">Lihat</button></a></td>
                        <td>
                            <a href=""><button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button></a>
                            <a href=""><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>      
    </div>

    <!-- Tambah data dengan modal -->
    <div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background-color: crimson;">
                <h5 class="modal-title" style="color: whitesmoke;">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-user">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk *</label>
                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" title="Nama Produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga Produk *</label>
                        <input type="text" name="harga_produk" class="form-control" id="harga_produk" title="Harga Produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_produk" class="form-label">Deskripsi Produk *</label>
                        <textarea name="deskripsi_produk" class="form-control" id="deskripsi_produk" title="Deskripsi Produk" rows="3" required></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button> 
                        <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin untuk menambahkannya?');" data-bs-dismiss="modal">Tambah</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>
    
    

    

</body>
</html>