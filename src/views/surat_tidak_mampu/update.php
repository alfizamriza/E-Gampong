<?php
session_start();
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

// Pastikan sesi telah dimulai di setiap halaman yang melibatkan sesi
// session_start();

// Tangkap data dari formulir
$NIK = mysqli_real_escape_string($conn, $_POST['NIK']);
$Nama = mysqli_real_escape_string($conn, $_POST['Nama']);
$Tempat_Lahir = mysqli_real_escape_string($conn, $_POST['Tempat_Lahir']);
$Tanggal_Lahir = mysqli_real_escape_string($conn, $_POST['Tanggal_Lahir']);
$Alamat = mysqli_real_escape_string($conn, $_POST['Alamat']);
$JK = mysqli_real_escape_string($conn, $_POST['JK']);
$Tujuan = mysqli_real_escape_string($conn, $_POST['Tujuan']);
$Catatan = mysqli_real_escape_string($conn, $_POST['Catatan']);
$Tgl_permohonan = mysqli_real_escape_string($conn, $_POST['Tgl_permohonan']);
$Tgl_Cetak = mysqli_real_escape_string($conn, $_POST['Tgl_Cetak']);

$id_user2 = isset($_SESSION['user']['Id_user']) ? $_SESSION['user']['Id_user'] : null;
$status2 = 0;
if ($id_user2 === null) {
    // Handle case when Id_user is not set in session
    die("Error: Id_user is not set in session.");
}
// Query untuk menyimpan data ke database
$query = "INSERT INTO surat_tidak_mampu (NIK, Nama, JK, Tempat_Lahir, Tanggal_Lahir, Alamat, Tujuan, Catatan, Tgl_permohonan, Tgl_Cetak, id_user, status) 
          VALUES ('$NIK', '$Nama', '$JK', '$Tempat_Lahir','$Tanggal_Lahir', '$Alamat', '$Tujuan', '$Catatan', '$Tgl_permohonan', '$Tgl_Cetak', '$id_user2', $status2)";

if ($conn->query($query) === TRUE) {
    echo "Data berhasil disimpan";

    // Arahkan pengguna ke halaman yang sesuai
    header("Location: ../../tk.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
