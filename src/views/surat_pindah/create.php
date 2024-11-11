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
$Alamat_baru = mysqli_real_escape_string($conn, $_POST['Alamat_baru']);
$Alasan_pindah = mysqli_real_escape_string($conn, $_POST['Alasan_pindah']);
$Tgl_pindah = mysqli_real_escape_string($conn, $_POST['Tgl_pindah']);
$Tgl_permohonan = mysqli_real_escape_string($conn, $_POST['Tgl_permohonan']);
$Tgl_cetak = mysqli_real_escape_string($conn, $_POST['Tgl_cetak']);


$id_user2 = isset($_SESSION['user']['Id_user']) ? $_SESSION['user']['Id_user'] : null;
$status2 = 0;
if ($id_user2 === null) {
    // Handle case when Id_user is not set in session
    die("Error: Id_user is not set in session.");
}

// Query untuk menyimpan data ke database
$query = "INSERT INTO surat_pindah (NIK, Nama, Tempat_Lahir, Tanggal_Lahir, Alamat, Alamat_baru, Alasan_pindah, Tgl_pindah, Tgl_permohonan, Tgl_cetak, id_user) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($query);

// Periksa apakah prepared statement berhasil dibuat
if ($stmt === false) {
    die("Error in preparing statement: " . $conn->error);
}

// Bind parameter
$stmt->bind_param("sssssssssss", $NIK, $Nama, $Tempat_Lahir, $Tanggal_Lahir, $Alamat, $Alamat_baru, $Alasan_pindah, $Tgl_pindah, $Tgl_permohonan, $Tgl_cetak, $id_user2);


// Eksekusi prepared statement
if ($stmt->execute()) {
    echo "Data berhasil disimpan";
    header("Location: ../../tk.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Tutup prepared statement
$stmt->close();

// Tutup koneksi
$conn->close();
?>
