<?php
// Alert kirim data
if(isset($_POST["kirim"])){
  echo "<script>alert('Silahkan login terlebih dahulu untuk mengakses!')</script>";
}

?>

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
            <a href="../katalog/katalog.php" class="navbar-brand hover-select" style="cursor: Pointer; font-size: 17px; font-weight: 600;">Katalog</a>
            <a href="../tentang/tentang.php" class="navbar-brand hover-select" style="cursor: pointer; font-size: 17px; font-weight: 600;">Tentang</a>
            <a href="../kontak/kontak.php" class="navbar-brand nav-now" style="cursor: pointer; font-size: 17px; font-weight: 600;">Kontak</a>
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
    <div class="title-introduction-1" style="padding-left: 0%; padding-right: 0%;">
      <h2 style="text-align: center; width: 100%; cursor: default; color:crimson; font-size: 40px; font-weight: 700; padding-top: 200px;">Let's Connect With Us</h2>
      <div class="container">
        <p style="text-align: center; width: 100%; padding-top: 30px; padding-bottom: 30px; padding-left: 10%; padding-right: 10%; color: crimson;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque fuga autem nihil consequatur a modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel distinctio tempore aliquid expedita numquam perspiciatis accusamus animi repudiandae exercitationem.</p>
      <div class="row">
        <div class="container col-6" style="color: crimson; width: 45%; text-align: right;">
          <i class="bi bi-telephone-fill"></i>
          +62-812-3456-7891
        </div>
        <div class="container col-6" style="color: crimson; width: 45%;">
          <i class="bi bi-envelope-fill"></i>
          rosehollan@gmail.com
        </div>
      </div>
      <div class="container" style="margin-bottom: 100px;"></div>
      </div>
      <div class="row" style="margin-left: 100px;">
        <div class="container col-6" style="color: crimson; width: 45%; text-align: justify;">
          <h5 style="font-weight: 700;">Let's Talk</h5>

          <!-- Input Form -->
          <form action="" method="POST">
            <div class="mb-3">
              <label for="input-name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="input-name" required>
            </div>
            <div class="mb-3">
              <label for="input-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" required>
              <div id="emailhelp" class="form-text">Jangan pernah membagikan email kepada siapapun.</div>
            </div>
            <div class="mb-3">
              <label for="Textarea1" class="form-label">Pesan</label>
              <textarea class="form-control" id="Textarea1" rows="3" required></textarea>
            </div>
              <button type="submit" name="kirim" class="btn btn-danger" style="width: 100px;">Kirim</button>
          </form>

        </div>
        <div class="container col-6" style="width: 30%; text-align: center; margin-right: 150px;">
          <div class="picture" style="padding-top: 180px; padding-bottom: 180px; background-image: url(../../asset/icon/mail.freepik.pikisuperstar.jpg); background-position: center; background-size: cover;"></div>
        </div>
      </div>
      <div class="container" style="padding-bottom: 50px; background-color: whitesmoke;"></div>
    </div>

    <!-- FOOTER -->
    <div class="bot-footer">
      
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>