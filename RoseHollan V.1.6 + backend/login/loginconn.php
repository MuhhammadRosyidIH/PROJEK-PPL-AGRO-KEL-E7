<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost","root","","rosehollan");

// Jika tulisan di bawah muncul dan tidak error maka berhasil terkoneksi
// echo "Berhasil terkoneksi dengan Database";

// Fungsi tambah pada SignUp
function signup($Data) {
    // Memasukkan variabel conn yang berada di luar fungsi
    global $conn;

    // Data diambil satu per satu dari dalam form
    $nama = htmlspecialchars($Data["nama_lengkap"]);
    $email = htmlspecialchars($Data["email"]);
    $telephone = htmlspecialchars($Data["nomor_telephone"]);
    $password = htmlspecialchars($Data["password"]);
    $password_hash = htmlspecialchars(password_hash($Data["password"], PASSWORD_DEFAULT));
    $domisili = htmlspecialchars($Data["domisili"]);
    $tanggallahir = htmlspecialchars($Data["tanggal_lahir"]);

    // Querry Insert Data (Syntax SQL)
    $query = "INSERT INTO testing
                VALUES
                ('','$nama','$email','$telephone','$password','$password_hash','$domisili','$tanggallahir')
                ";
    mysqli_query($conn, $query);

    // Mengembalikan affected_rows
    return mysqli_affected_rows($conn);
}   


?>