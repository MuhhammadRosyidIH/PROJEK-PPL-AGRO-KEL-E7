<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>RoseHollan</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height: 12vh; opacity: 0.85;">
    <div class="container-fluid">
      <a class="navbar-brand"
        style="cursor: default; color: crimson; padding-left: 50px; margin-right: 280px; font-size: 25px;"><strong>RoseHollan</strong></a>
      <a href="index_logged.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Beranda</a>
      <a href="product_logged.php" class="navbar-brand hover-select"
        style="cursor: Pointer; font-size: 17px; font-weight: 600;">Katalog</a>
      <a href="about_logged.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Tentang</a>
      <a href="contact_logged.php" class="navbar-brand hover-select"
        style="cursor: pointer; font-size: 17px; font-weight: 600;">Kontak</a>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end ms-auto">
        <a href="cart.php" class="navbar-brand hover-select"
          style="cursor: pointer; font-size: 17px; font-weight: 600;">Pesanan saya</a>
        <a href="profil.php"><i class="bi bi-person-fill nav-now" style='color:crimson; font-size:20px; margin-right: 50px;'></i></a>
      </div>
    </div>
  </nav>
  </nav>

    <!-- KONTEN -->
    <div class="title-introduction-1" style="padding-left: 0%; padding-right: 0%;"><div class="container">
        <div class="row">
        <div class="container col-6" style="color: crimson; width: 45%; text-align: right;">
        </div>
        <div class="container col-6" style="color: crimson; width: 45%;"
          <i class="bi bi-envelope-fill"></i>
        </div>
      </div>
      <div class="container" style="margin-bottom: 100px;"></div>
      </div>
      <div class="row" style="margin-left: 100px;">
        <div class="container col-6" style="color: crimson; width: 45%; text-align: justify;">
          <h5 style="font-weight: 700;">Let's Talk</h5>
          <form>
            <div class="mb-3">
              <label for="input-name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="input-name">
            </div>
            <div class="mb-3">
              <label for="input-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp">
              <div id="emailhelp" class="form-text">Jangan pernah membagikan email kepada siapapun.</div>
            </div>
            <div class="mb-3">
              <label for="Textarea1" class="form-label">Pesan</label>
              <textarea class="form-control" id="Textarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-danger" style="width: 100px;">Kirim</button>
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