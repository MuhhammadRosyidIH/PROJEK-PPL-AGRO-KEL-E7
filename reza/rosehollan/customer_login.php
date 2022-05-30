
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
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <title>Sign In Rose Hollan</title>
</head>

<body>

  <!-- KONTEN -->
  <div class="title-introduction-1">
    <div class="row">

    <!-- Sebelah Kiri -->
      <div class="col-6" style="background-color: white; height: 100vh;">
        <div class="picture" style="background-image: url(asset/cup-tea.png); background-position: center; background-size: cover; height: 50vh; margin-top: 10vh;"></div>
        <div class="intro" style="color: crimson; cursor: default; margin-top: 50px; margin-left: 50px; margin-right: 50px; text-align: justify;">
          <h2 style="font-weight: 700;">Rose Hollan</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad facilis quis recusandae, eligendi soluta laborum nisi at beatae minus, eius sunt obcaecati distinctio porro, nesciunt odio? Et impedit sit nisi!</p>
          <a href=".index.php">
            <button class="btn btn-danger" style="width: 100px;">kembali</button>
          </a>
        </div>
      </div>

      <!-- Sebelah Kanan -->
      <div class="col-6">
        <div class="container" style="background-color: white; margin-top: 10vh; height: 80vh; width: 85vh;">
          <div class="introsignin" style="color: crimson; padding-top: 50px;">
            <h2 style="font-weight: 700; cursor: default; text-align: center; padding-bottom: 50px;">Rose Hollan</h2>
            <h5 style="font-weight: 700; cursor: default; text-align: justify; margin-left: 25px; margin-right: 25px;">Sign In</h5>
            <p style="text-align: justify; margin-left: 25px; margin-right: 25px;">Silahkan Login jika telah memiliki akun.</p>
          </div>

          <!-- form login -->
          <form style="color: crimson; margin-left: 25px; margin-right: 25px;" onsubmit="return false" id="login">
            <div class="mb-3">
              <label for="email" class="form-label">Alamat email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Kata sandi</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div style="text-align: center;">
              <button type="submit" name="login" value="login" class="btn btn-danger" style="width: 100px;">Login</button>
            </div>
          </form>

          <div style="color: crimson; margin-top: 50px; text-align: center;">
            <p>Belum memiliki Akun? Silahkan daftar <a href="customer_registration.php?register=1">disini.</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>