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
    <title>RoseHollan</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 12vh; opacity: 0.85;">
        <div class="container-fluid">
            <a class="navbar-brand" style="cursor: default; color: crimson; padding-left: 50px; margin-right: 280px; font-size: 25px;"><strong>RoseHollan</strong></a>
            <a href="../beranda/beranda.php" class="navbar-brand hover-select" style="cursor: pointer; font-size: 17px; font-weight: 600;">Beranda</a>
            <a href="../katalog/katalog.php" class="navbar-brand nav-now" style="cursor: Pointer; font-size: 17px; font-weight: 600;">Katalog</a>
            <a href="../tentang/tentang.php" class="navbar-brand hover-select" style="cursor: pointer; font-size: 17px; font-weight: 600;">Tentang</a>
            <a href="../kontak/kontak.php" class="navbar-brand hover-select" style="cursor: pointer; font-size: 17px; font-weight: 600;">Kontak</a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end ms-auto">
              <a href="../../login/sign up/signup.php">
                <button type="button" class="btn btn-danger me-md-3" style="width: 100px;">Sign up</button>
              </a>
              <a href="../../login/sign in/signin.php">
                <button type="button" class="btn btn-outline-danger me-md-5" style="width: 100px;">Sign in</button>
              </a>
            </div>
        </div>
    </nav>
    
    <!-- KONTEN -->
    <div class="title-introduction-1">
      <div>
        <h2 style="text-align: center; width: 100%; cursor: default; color:crimson; font-size: 40px; font-weight: 700; padding-top: 120px;">Produk RoseHollan</h2>
        <p style="text-align: justify; width: 100%; padding-top: 30px; padding-left: 15%; padding-right: 15%; color: crimson;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias expedita, id eveniet distinctio eum veniam ratione quaerat recusandae molestiae iste itaque voluptate necessitatibus dicta. Est totam iusto tempora optio. Perferendis, placeat doloribus consequatur eligendi eveniet aliquid dignissimos similique pariatur vitae quisquam facilis cupiditate atque architecto ipsa repudiandae laborum porro optio reprehenderit magnam! Aliquam, eaque at! Iure cumque ullam sapiente molestiae, eos similique dolorem fuga enim pariatur eum odio cupiditate quasi saepe nulla totam officiis, at fugit quis expedita? Consectetur doloribus rem porro deserunt exercitationem.</p>
      </div>
      <div class="container" style="margin-top: 50px; padding-bottom: 100px; width: 80%;">
        <div class="row" style="margin-left: 30px;">
          <div class="col-4">
            <div class="card" style="width: 18rem; background-color: crimson;">
              <div class="card-body">
                <h5 class="card-title" style="color: whitesmoke; text-align: center;">Teh Mawar</h5>
                  <div class="picture" style="margin-top: 20px; margin-bottom: 20px; padding-top: 90px; padding-bottom: 90px; background-image: url(../../asset/product/nugget.jpg); background-position: center; background-size: cover; border-radius: 4px;"></div>
                <div class="d-flex justify-content-between">
                  <a href="../../login/sign in/signin.php" class="btn btn-outline-light me-md-3" style="width: 100px; height: 80%;" onclick="return confirm('Silahkan login terlebih dahulu untuk mengakses!')">Detail</a>
                  <p style="color:whitesmoke; margin-top: 5px;">Rp. 50.000,00-</p>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem; background-color: crimson;">
              <div class="card-body">
                <h5 class="card-title" style="color: whitesmoke; text-align: center;">Sirup Mawar</h5>
                  <div class="picture" style="margin-top: 20px; margin-bottom: 20px; padding-top: 90px; padding-bottom: 90px; background-image: url(../../asset/product/nugget.jpg); background-position: center; background-size: cover; border-radius: 4px;"></div>
                <div class="d-flex justify-content-between">
                  <a href="../../login/sign in/signin.php" class="btn btn-outline-light me-md-3" style="width: 100px; height: 80%;" onclick="return confirm('Silahkan login terlebih dahulu untuk mengakses!')">Detail</a>
                  <p style="color:whitesmoke; margin-top: 5px;">Rp. 50.000,00-</p>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem; background-color: crimson;">
              <div class="card-body">
                <h5 class="card-title" style="color: whitesmoke; text-align: center;">Nugget Mawar</h5>
                  <div class="picture" style="margin-top: 20px; margin-bottom: 20px; padding-top: 90px; padding-bottom: 90px; background-image: url(../../asset/product/nugget.jpg); background-position: center; background-size: cover; border-radius: 4px;"></div>
                <div class="d-flex justify-content-between">
                  <a href="../../login/sign in/signin.php" class="btn btn-outline-light me-md-3" style="width: 100px; height: 80%;" onclick="return confirm('Silahkan login terlebih dahulu untuk mengakses!')">Detail</a>
                  <p style="color:whitesmoke; margin-top: 5px;">Rp. 50.000,00-</p>
                </div>
                
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>

    <!-- FOOTER -->
    <div class="bot-footer" style="text-align: center; font-size: 45px; font-weight: 600; color: whitesmoke;">
      FOOTER
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>