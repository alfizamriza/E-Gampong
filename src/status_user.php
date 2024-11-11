<?php

// Periksa apakah admin telah login
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

$id_user2 = isset($_SESSION['user']['Id_user']) ? $_SESSION['user']['Id_user'] : null;

if ($id_user2 === null) {
    // Handle case when Id_user is not set in session
    die("Error: Id_user is not set in session.");
}

// Query untuk mendapatkan data surat tidak mampu
$query_surat_tidak_mampu = "SELECT * FROM surat_tidak_mampu WHERE id_user = '$id_user2'";
$result_surat_tidak_mampu = $conn->query($query_surat_tidak_mampu);

// Query untuk mendapatkan data surat pindah
$query_surat_pindah = "SELECT * FROM surat_pindah  WHERE id_user = '$id_user2'";
$result_surat_pindah = $conn->query($query_surat_pindah);

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="Image/LOGO.PNG" type="image/x-icon">
    <title>STATUS SURAT</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        /* Overrides for Tailwind CSS */
        nav {
            position: fixed;
            width: 100%;
            z-index: 1000;
            /* Nilai z-index yang cukup tinggi agar nav tetap di atas elemen lain */
        }

        /* Form fields */
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /* text-gray-700 */
            padding-left: 1rem;
            /* pl-4 */
            padding-right: 1rem;
            /* pl-4 */
            padding-top: .5rem;
            /* pl-2 */
            padding-bottom: .5rem;
            /* pl-2 */
            line-height: 1.25;
            /* leading-tight */
            border-width: 2px;
            /* border-2 */
            border-radius: .25rem;
            border-color: #edf2f7;
            /* border-gray-200 */
            background-color: #edf2f7;
            /* bg-gray-200 */
        }

        /* Row Hover */
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /* bg-indigo-100 */
        }

        /* Pagination Buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /* font-bold */
            border-radius: .25rem;
            /* rounded */
            border: 1px solid transparent;
            /* border border-transparent */
        }

        /* Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /* text-white */
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /* shadow */
            font-weight: 700;
            /* font-bold */
            border-radius: .25rem;
            /* rounded */
            background: #667eea !important;
            /* bg-indigo-500 */
            border: 1px solid transparent;
            /* border border-transparent */
        }

        /* Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /* text-white */
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /* shadow */
            font-weight: 700;
            /* font-bold */
            border-radius: .25rem;
            /* rounded */
            background: #667eea !important;
            /* bg-indigo-500 */
            border: 1px solid transparent;
            /* border border-transparent */
        }

        /* Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /* border-b-1 border-gray-300 */
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /* Change colour of responsive icon */
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /* bg-indigo-500 */
        }

        body {
            padding-top: 6rem;
            /* Sesuaikan dengan tinggi nav Anda */
        }
    </style>
</head>

<body class="bg-gray-100  tracking-wider leading-normal">
    <!-- ubah -->
    <nav class="shadow-xl fixed top-0 left-0 right-0 flex items-center
            justify-between
            flex-wrap bg-white p-6">
        <a href="index.php">
            <div class="flex items-center flex-shrink-0 text-teal-800
                        mr-6">
                <img src="Image/LOGO.png" class="fill-current h-10 w-10
                            mr-2" width="54" height="54" viewBox="0 0 54 54">
                <span class=" font-bold text-teal-800 text-xl tracking-tight">E-GAMPONG</span>
            </div>
        </a>
        <div>
            <a href="keluar.php" class="font-bold inline-block text-sm px-8
                    py-2
                    leading-none border rounded text-teal-800 border-teal-800
                    hover:border-transparent hover:text-black hover:bg-teal-800
                    mt-1 lg:mt-0">KELUAR</a>
        </div>
    </nav>

    <div>
        <!-- ubah -->
        <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2">
            <div class="pt-28 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-teal-800 font-bold
                            text-5xl md:text-6xl xl:text-6xl">STATUS SURAT</h1>
                    <!-- <p class="mt-8 text-gray-700 dark:text-teal-950 ">Kami
                        siap membantu anda dalam berbagai urusan Adminitrasi
                        melalu website E-Gampong. Website ini dapat membuat
                        surat keterangan miskin dan surat pindah.</p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <!-- Container -->
        <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2 z">
            <!-- Title -->
            <h1 class="flex pt-36 items-center font-sans font-bold break-normal
                text-teal-800 px-2 py-8 text-xl md:text-2xl">
                Data Surat Tidak Mampu
            </h1>

            <!-- Card -->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow
                bg-white">
                <table id="example" class="z-auto stripe hover mt-8" style="width:100%;
                    padding-top: 1em; padding-bottom: 1em;">
                    <thead>
                        
                        <th class="border bg-gray-100 px-4 py-2">NIK</th>
                        <th class="border bg-gray-100 px-4 py-2">Nama</th>
                        <th class="border bg-gray-100 px-4 py-2">Tanggal Permohonan</th>
                        <th class="border bg-gray-100 px-4 py-2">Tanggal Cetak</th>
                        <th class="border bg-gray-100 px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Tampilkan data surat tidak mampu
                        while ($row = $result_surat_tidak_mampu->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='border px-4 py-2'>" . $row['NIK'] . "</td>";
                            echo "<td class='border px-4 py-2'>" . $row['Nama'] . "</td>";
echo "<td class='border px-4 py-2'>" . $row['Tgl_permohonan'] . "</td>";
echo "<td class='border px-4 py-2'>" . $row['Tgl_cetak'] . "</td>";

if ($row['status'] == 0) {
    echo "<th class='border bg-gray-100 px-4 py-2 text-red-700'>BELUM DICETAK</th>";
} elseif ($row['status'] == 1) {
    echo "<th class='border bg-gray-100 px-4 py-2 text-green-600'>SUDAH DICETAK</th>";
} else {
    echo "<th class='border bg-gray-100 px-4 py-2'>Tidak Falit</th>";
}
// Tambahkan kolom lain sesuai kebutuhan Anda
echo "</tr>";

// ...

                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /Card -->
        </div>
    </div>




    <div class="bg-gray-100 pt-24 text-gray-900 tracking-wider leading-normal">
        <!-- Container -->
        <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2">
            <!-- Title -->
            <h1 class="flex items-center font-sans font-bold break-normal
                text-teal-800 px-2 py-8 text-xl md:text-2xl">
                Data Surat pindah
            </h1>

            <!-- Card -->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow
                bg-white">
                <table id="example2" class="stripe hover" style="width:100%;
                    padding-top: 1em; padding-bottom: 1em;">
                    <thead>
                        <tr>
    
                            <th class="border bg-gray-100 px-4 py-2">NIK</th>
                            <th class="border bg-gray-100 px-4 py-2">Nama</th>
                            <th class="border bg-gray-100 px-4 py-2">Tanggal Permohonan</th>
                            <th class="border bg-gray-100 px-4 py-2">Tanggal Cetak</th>
                            <th class="border bg-gray-100 px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Tampilkan data surat pindah
                        while ($row = $result_surat_pindah->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td class='border px-4 py-2'>" . $row['NIK'] . "</td>";
                            echo "<td class='border px-4 py-2'>" . $row['Nama'] . "</td>";
// ...
echo "<td class='border px-4 py-2'>" . $row['Tgl_permohonan'] . "</td>";
echo "<td class='border px-4 py-2'>" . $row['Tgl_cetak'] . "</td>";
if ($row['status'] == 0) {
    echo "<th class='border bg-gray-100 px-4 py-2 text-red-700'>BELUM DICETAK</th>";
} elseif ($row['status'] == 1) {
    echo "<th class='border bg-gray-100 px-4 py-2 text-green-600'>SUDAH DICETAK</th>";
} else {
    echo "<th class='border bg-gray-100 px-4 py-2'>Tidak Falit</th>";
}
// Tambahkan kolom lain sesuai kebutuhan Anda
echo "</tr>";

// ...

                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /Card -->
        </div>
    </div>



    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>

</html>