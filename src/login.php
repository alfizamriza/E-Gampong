<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-GAMPONG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="Image/LOGO.PNG" type="image/x-icon">
</head>

<body>
    <nav class="shadow-xl fixed top-0 left-0 right-0 flex items-center justify-between flex-wrap bg-white p-6">
        <div class="flex items-center flex-shrink-0 text-teal-800 mr-6">
            <img src="Image/LOGO.png" class="fill-current h-10 w-10 mr-2" width="54" height="54" viewBox="0 0 54 54">
            <span class="font-bold text-xl tracking-tight">E-GAMPONG</span>
        </div>
        <div>
            <a href="reg.php" class="font-bold inline-block text-sm px-8 py-2 leading-none border rounded text-teal-800 border-teal-800 hover:border-transparent hover:text-white hover:bg-teal-800 mt-1 lg:mt-0">DAFTAR</a>
        </div>
    </nav>

    <!-- MENU -->
    <div id="card" class="card">
        <div id="card-content">
            <div class="font-bold" id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="">
                <!-- <label for="user-email"> -->
                &nbsp;NIK
                </label>
                <input id="NIK" name="NIK" class="form-content" type="text" autocomplete="on" required />
                <div class="form-border"></div>
                <!-- <label for="user-password" style="padding-top: px">&nbsp; -->
                &nbsp;Password
                </label>
                <input id="user-password" name="password" class="form-content" type="password" required />
                <div class="form-border"></div>

                <input id="submit-btn" name="submit" type="submit" value="LOGIN">
            </form>

            <?php
            session_start();

            if (isset($_POST['submit'])) {
                include 'koneksi.php';

                $NIK = mysqli_real_escape_string($conn, $_POST['NIK']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $user_query = "SELECT Id_user, NIK, Nama, password FROM user WHERE NIK = ?";
                $user_stmt = $conn->prepare($user_query);
                $user_stmt->bind_param("s", $NIK);
                $user_stmt->execute();
                $user_result = $user_stmt->get_result();
                $user_stmt->close();

                $admin_query = "SELECT Id_admin, Nama_admin, Password FROM admin WHERE Id_admin = ?";
                $admin_stmt = $conn->prepare($admin_query);
                $admin_stmt->bind_param("s", $NIK);
                $admin_stmt->execute();
                $admin_result = $admin_stmt->get_result();
                $admin_stmt->close();

                if ($user_result->num_rows > 0) {
                    $user = $user_result->fetch_assoc();
                    $stored_hashed_password = $user['password'];
                
                    if (password_verify($password, $stored_hashed_password)) {
                        session_start();
                        $_SESSION['stat_login'] = true;
                        $_SESSION['user'] = array(
                            'Id_user' => $user['Id_user'], // Include Id_user in the session
                            'Nama' => $user['Nama']
                        );
                        $_SESSION['stat_login_user'] = true;
                        header("Location: index.php");
                        exit();
                    }
                }
                 elseif ($admin_result->num_rows > 0) {
                    $admin = $admin_result->fetch_assoc();
                    $stored_hashed_password = $admin['Password'];

                    if (password_verify($password, $stored_hashed_password)) {
                        $_SESSION['stat_login_admin'] = true;
                        $_SESSION['Id_admin'] = $admin['Id_admin'];
                        $_SESSION['Nama_admin'] = $admin['Nama_admin'];
                        header("Location: index_admin.php");
                        exit();
                    }
                }

                echo '<script>alert("NIK atau password Anda salah!")</script>';

                // Add logging for debugging
                error_log("Login failed for NIK: $NIK", 0);
            }
            ?>




        </div>
    </div>
</body>

<script>
    document.getElementById("NIK").addEventListener("input", function(event) {
        // Hapus karakter non-angka dari input
        this.value = this.value.replace(/\D/g, "");
    });
</script>

</html>