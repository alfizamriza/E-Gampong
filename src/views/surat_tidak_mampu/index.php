<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compation" content="IE-edge" />
    <title>Surat Tidak Mampu</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../Image/LOGO.PNG" type="image/x-icon">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        header {
            z-index: 999999;
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        #card {
            width: 70%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #card-content {
            display: flex;
        }

        #card-title {
            flex: 1;
            color: #3a6969;
            padding: 8px;
            /* background-color: teal; */
        }

        form {
            flex: 2;
            padding: 0 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form-content {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #submit-btn {
            /* background-color: #333; */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            text-align: left;
            padding: 20px;
            background-color: #ffffff;
            color: white;
            display: flex;
            align-items: center;
        }

        #footer-logo img {
            margin-right: 10px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="shadow-xl fixed top-0 left-0 right-0 flex items-center
                justify-between
                flex-wrap bg-white p-6 z-50">
            <a href="../../index.php">
                <div class="flex items-center flex-shrink-0 text-teal-800
                        mr-6">
                    <img src="../../Image/LOGO.png" class="fill-current h-10 w-10
                            mr-2" width="54" height="54" viewBox="0 0 54 54">
                    <span class="font-bold text-xl tracking-tight">E-GAMPONG</span>
                </div>
            </a>
            <div>
                <a href="../../login.php" class="font-bold inline-block text-sm
                        px-8
                        py-2
                        leading-none border rounded text-teal-800
                        border-teal-800
                        hover:border-transparent hover:text-white
                        hover:bg-teal-800
                        mt-1 lg:mt-0">KELUAR</a>
            </div>
        </nav>
    </header>
    <div>
        <div>
            <div>
                <h1>E-GAMPONG</h1>
                <p>Kami ada Untuk Anda</p>
            </div>
        </div>
    </div>
    <div id="card" class="card">
        <div id="card-content">

            <div class="font-bold" id="card-title">
                <img src="../../Image/deficit.png" />
                <h2>Membuat Surat Tidak Mampu</h2>

            </div>
            <form method="post" class="form" action="create.php">
                <label for="NIK">NIK</label>
                <input id="NIK" class="form-content" name="NIK" autocomplete="on" required />

                <label for="nama">Nama</label>
                <input id="nama" class="form-content" type="text" name="Nama" required />

                <label for="tempatLahir">Tempat Lahir</label>
                <input id="tempatLahir" class="form-content" type="text" name="Tempat_Lahir" required />

                <label for="tanggalLahir">Tanggal Lahir</label>
                <input id="tanggalLahir" class="form-content" type="date" name="Tanggal_Lahir" required />

                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-content" name="Alamat" required></textarea>

                <!-- <label for="jenisKelamin">Jenis Kelamin</label>
                <select id="jenisKelamin" class="form-content" name="JK" required>
                    <option value="laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select> -->

                <label for="tujuan">Tujuan</label>
                <input id="tujuan" class="form-content" type="text" name="Tujuan" required />

                <label for="catatan">Catatan</label>
                <textarea id="catatan" class="form-content" name="Catatan"></textarea>

                <label for="tanggalPermohonan">Tanggal Permohonan</label>
                <input id="tanggalPermohonan" class="form-content" type="date" name="Tgl_permohonan" required />

                <label for="tanggalCetak">Tanggal Cetak</label>
                <input id="tanggalCetak" class="form-content" type="date" name="Tgl_Cetak" required />

                <input id="submit-btn" class="dark:bg-teal-700
                        hover:dark:bg-teal-900 hover:shadow-2xl" type="submit" value="Kirim">
            </form>
        </div>
    </div>

    <script>
        // Menangani input event untuk elemen dengan ID "NIK"
    document.getElementById("NIK").addEventListener("input", function(event) {
    // Hapus karakter non-angka dari input
        this.value = this.value.replace(/\D/g, "");
    });

        function logout() {}
    </script>
</body>

</html>