<?php
session_start();
include('koneksi.php');
error_reporting(1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Gamponng</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="shadow-xl fixed top-0 left-0 right-0 flex items-center
            justify-between
            flex-wrap bg-white p-6">
        <div class="flex items-center flex-shrink-0 text-teal-800 mr-6">
            <img src="Image/LOGO.png" class="fill-current h-10 w-10 mr-2" width="54" height="54" viewBox="0 0 54 54">
            <span class="font-bold text-xl tracking-tight">E-GAMPONG</span>
        </div>

    </nav>

    <div>

        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2
                -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary
                    to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400
                    to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <div class="flex items-center justify-center -space-x-2
                            mb-5">
                        <img loading="lazy" width="220" height="220" src="Image/Alfi.png" alt="member photo" class="h-8 w-8 rounded-full object-cover">
                        <img loading="lazy" width="220" height="220" src="Image/ihsan.png" alt="member photo" class="h-12 w-12 rounded-full object-cover">
                        <img loading="lazy" width="220" height="220" src="Image/fadlul.png" alt="member photo" class="z-10 h-16 w-16 rounded-full
                                object-cover">
                        <img loading="lazy" width="220" height="220" src="Image/Farhan.png" alt="member photo" class="relative h-12 w-12 rounded-full
                                object-cover">
                        <img loading="lazy" width="220" height="220" src="Image/Gempi.png" alt="member photo" class="h-8 w-8 rounded-full object-cover">
                    </div>
                    <h1 class="text-gray-900 dark:text-teal-800 font-bold
                            text-5xl md:text-6xl xl:text-7xl">E-GAMPONG</h1>
                    <p class="mt-8 text-gray-700 dark:text-teal-900">Kami
                        siap membantu anda dalam berbagai urusan Adminitrasi
                        melalu website E-Gampong. Website ini dapat membuat
                        surat keterangan miskin dan surat pindah.</p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4
                            gap-x-6">
                        <a href="reg.php" class="relative flex h-11 w-full
                                items-center justify-center px-6 before:absolute
                                before:inset-0 before:rounded-full
                                before:bg-primary before:transition
                                before:duration-300 hover:before:scale-105
                                active:duration-75 active:before:scale-95
                                sm:w-max dark:before:border-teal-800
                                dark:before:bg-teal-700">
                            <span class="relative text-base font-semibold
                                    text-white">DAFTAR</span>
                        </a>
                        <a href="login.php" class="relative flex h-11
                                w-full
                                items-center justify-center px-6 before:absolute
                                before:inset-0 before:rounded-full before:border
                                before:border-transparent before:bg-primary/10
                                before:bg-gradient-to-b before:transition
                                before:duration-300 hover:before:scale-105
                                active:duration-75 active:before:scale-95
                                dark:before:border-teal-800
                                dark:before:bg-teal-800 sm:w-max">
                            <span class="relative text-base font-semibold
                                    text-primary dark:text-white">MASUK</span>
                        </a>
                    </div>
                    <div class="hidden py-8 mt-40 border-y border-gray-100
                            dark:border-teal-900 sm:flex justify-between">
                        <div class="text-left">
                            <h6 class="text-lg font-bold text-gray-700
                                    dark:text-teal-900">SURAT TIDAK MAMPU</h6>
                            <p class="mt-2 text-gray-500">Gratis</p>
                        </div>
                        <div class="text-right">
                            <h6 class="text-lg font-bold text-gray-700
                                    dark:text-teal-900">SURAT PINDAH</h6>
                            <p class="mt-2 text-gray-500">Gratis</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 flex flex-wrap justify-center grid-cols-3
                        sm:grid-cols-4
                        md:grid-cols-6 ">
                    <div class="p-4 flex grayscale transition duration-200
                            hover:grayscale-0">
                        <img src="Image/Garuda_Pancasila,_Coat_of_Arms_of_Indonesia.png" class="h-16
                                w-auto m-auto" loading="lazy" alt="client logo" width="" height="">
                    </div>
                    <div class="p-4 mr-12 ml-12 grayscale transition
                            duration-200
                            hover:grayscale-0">
                        <img src="Image/Coat_of_arms_of_Aceh.png" class="h-16 w-auto mx-auto" loading="lazy" alt="Provinsi Aceh" width="" height="">
                    </div>
                    <div class="p-4 grayscale transition duration-200
                            hover:grayscale-0">
                        <img src="Image/Logo_Cahaya-Aceh2.png" class="h-16
                                w-auto mx-auto" loading="lazy" alt="client logo" width="" height="">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- disini inlcude -->
    <?php include("views/" . $_GET['page']); ?>
    <!-- akhir inlcude -->

</body>

</html>