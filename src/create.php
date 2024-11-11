<?php
// Hubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "egampong";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$NIK = $_POST['NIK'];
$No_KK = $_POST['No_KK'];
$Nama = $_POST['Nama'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Alamat = $_POST['Alamat'];
$No_WA = $_POST['No_WA'];
$JK = $_POST['JK'];
$Password = $_POST['Password'];

// Enkripsi password menggunakan password_hash
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

// Query untuk menyimpan data ke database dengan password yang sudah dienkripsi
$query = "INSERT INTO  user (NIK, No_KK, Nama, Tempat_Lahir, Tanggal_Lahir, Alamat, No_WA, JK, Password) 
          VALUES ('$NIK', '$No_KK', '$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Alamat', '$No_WA', '$JK', '$hashedPassword')";

if ($conn->query($query) === TRUE) {
    echo "Data berhasil disimpan";

    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
