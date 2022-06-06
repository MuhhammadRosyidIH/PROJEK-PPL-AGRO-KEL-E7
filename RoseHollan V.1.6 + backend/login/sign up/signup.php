<?php
// Koneksi ke file loginconn.php
require '../loginconn.php';

// Cek tombol submit telah di submit atau belum
if(isset($_POST["submit"])){

    // Konfirmasi password 
    if($_POST["password"] == $_POST["checkpassword"]){
        
        // Membuat password hash
        // var_dump($_POST["password"]);
        // var_dump(password_hash($_POST["password"], PASSWORD_DEFAULT));
        
        // Membaca password hash
        // var_dump(password_verify($_POST["password"],password_hash($_POST["password"], PASSWORD_DEFAULT)));
        
        // Cek data berhasil ditambah atau tidak
        if (signup($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = '../sign in/signin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal ditambahkan');
                </script>
            ";
        };
    
    } else {
        echo 
            "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
    }
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
  <title>Sign Un Rose Hollan</title>
</head>

<body>

  <!-- KONTEN -->
  <div class="title-introduction-1">
      <div style="padding-bottom: 5vh; background-color: whitesmoke;"></div>
      <div style="background-color: white; color: crimson; width: 90%; height: 90vh; margin-left: 5%; margin-right: 5%; border-radius: 8px;">
        
        <!-- JUDUL -->
        <div class="title" style="padding-top: 25px; padding-bottom: 10px; cursor: default;">
            <h3 style="text-align: center;">Selamat Datang di Rose Hollan</h3>
            <div style="background-color: crimson; height: 2.5px; margin-left: 400px; margin-right: 400px; margin-bottom: 10px;text-align: center;"></div>
            <p style="text-align: center; ">Silahkan isi formulir dibawah untuk mendaftar</p>
        </div>

        <!-- FORMULIR --> 
        <form action="" method="POST">  
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input name="nama_lengkap" autocomplete="off" type="text" title="Masukan nama lengkap" class="form-control" id="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input name="email" autocomplete="off" type="text" title="Masukan email" class="form-control" id="email" aria-describedby="emailHelp"required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No. telephone / Handphone</label>
                            <input name="nomor_telephone" autocomplete="off" type="text"  pattern="[0-9]{12,}" title="Wajib menggunakan nomor telepon lokal 12 atau 13 digit angka" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka, satu huruf kapital dan satu huruf kecil, dan memiliki panjang 8 atau lebih karakter" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="checkpassword" class="form-label">Konfirmasi Password</label>
                            <input name="checkpassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka, satu huruf kapital dan satu huruf kecil, dan memiliki panjang 8 atau lebih karakter" class="form-control" id="checkpassword" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container">
                        <div class="mb-3">
                            <label for="domisili" class="form-label">Domisili</label>
                            <select name="domisili" class="form-select" aria-label="Default select" title="Pilih Provinsi" id="domisili" required>
                                <!-- <option selected></option> -->
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatra Utara">Sumatra Utara</option>
                                <option value="Sumatra Barat">Sumatra Barat</option>
                                <option value="Riau">Riau</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Banten">Banten</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Bali">Bali</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Papua Barat">Papua Barat</option>
                                <option value="Papua">Papua</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                            <input name="tanggal_lahir"type="date" title="Masukan Tanggal Lahir" class="form-control" id="tanggallahir" required>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" style="text-align: justify; margin-right: 50px;">"Dengan ini, saya menyetujui segala peraturan yang berada pada Web Rose Hollan. Dokumen kebijakan privasi ini mengurai jenis informasi pribadi yang diterima dan dikumpulkan oleh Web Rose Hollan dan bagaimana informasi pribadi tersebut digunakan dengan semestinya."</label>
                            <input type="checkbox" id="check" onclick="enabled()" class="form-check-input">
                        </div>
                        <a href="../sign in/signin.php" class="btn btn-danger" style="width: 100px;">Kembali</a>
                        <button name="submit" disabled="true" type="submit" id="tombol" class="btn btn-success" style="width: 100px; margin-left: 10px;">Daftar</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
  </div>

</body>

<!-- Script CheckBox -->
<script>
    function enabled() {
        var check = document.getElementById("check");
        var btn = document.getElementById("tombol");
        if(check.checked) {
            btn.removeAttribute("disabled");
        } else {
            btn.disabled = "true";
        };
    };
</script>



</html>