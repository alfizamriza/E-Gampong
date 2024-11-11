<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-GAMPONG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="shadow-xl fixed top-0 left-0 right-0 flex items-center
            justify-between
            flex-wrap bg-white p-6">
            <a href="index.php">
                <div class="flex items-center flex-shrink-0 text-teal-800
                        mr-6">
                    <img src="Image/LOGO.png" class="fill-current h-10 w-10
                            mr-2" width="54" height="54" viewBox="0 0 54 54">
                    <span class="font-bold text-xl tracking-tight">E-GAMPONG</span>
                </div>
            </a>
        <div>
            <a href="keluar.php" class="font-bold inline-block text-sm px-8
                    py-2
                    leading-none border rounded text-teal-800 border-teal-800
                    hover:border-transparent hover:text-white hover:bg-teal-800
                    mt-1 lg:mt-0">KELUAR</a>
        </div>
    </nav>

    <div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h2 class="text-primary font-bold dark:text-teal-900">SELAMAT
                        DATANG, Staff</h2>
                    <h1 class="text-gray-900 dark:text-teal-800 font-bold
                            text-5xl md:text-6xl xl:text-7xl">E-GAMPONG</h1>
                    <p class="mt-8 text-gray-700 dark:text-teal-950 ">Kami
                        siap membantu anda dalam berbagai urusan Adminitrasi
                        melalu website E-Gampong. Website ini dapat membuat
                        surat keterangan miskin dan surat pindah.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- MENU -->
    <div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="mt-16 grid divide-x divide-y divide-teal-700
                    dark:divide-teal-900 overflow-hidden rounded-3xl border
                    border-gray-100 text-gray-600 dark:border-gray-700
                    sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                <div class="group relative bg-white dark:bg-teal-800
                        transition hover:z-[1] hover:shadow-2xl
                        hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="Image/deficit.png" class="w-12" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold text-gray-700
                                    dark:text-white transition
                                    group-hover:text-secondary">
                                Surat Tidak Mampu
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300">
                                Surat tidak mampu adalah dokumen resmi dari
                                pemerintah atau lembaga yang menyatakan
                                bahwa seseorang atau keluarganya mengalami
                                keterbatasan finansial.
                        </div>
                        <a href="status_stm.php" class="flex items-center
                                    justify-between
                                    group-hover:text-secondary">
                            <span class="text-sm text-orange-300">Cek Surat</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFA500" class="w-5 h-5 -translate-x-4 text-2xl
                                        opacity-0 transition duration-300
                                        group-hover:translate-x-0
                                        group-hover:opacity-100">
                                <path fill-rule="evenodd" d="M12.97
                                            3.97a.75.75 0 011.06 0l7.5
                                            7.5a.75.75 0
                                            010 1.06l-7.5 7.5a.75.75 0
                                            11-1.06-1.06l6.22-6.22H3a.75.75 0
                                            010-1.5h16.19l-6.22-6.22a.75.75 0
                                            010-1.06z" clip-rule="evenodd"></path>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="group relative bg-white dark:bg-teal-700
                            transition hover:z-[1] hover:shadow-2xl
                            hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="Image/placeholder.png" class="w-12" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold
                                        text-gray-700
                                        dark:text-white transition
                                        group-hover:text-secondary">
                                Surat Pindah
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300">
                                Surat pindah adalah dokumen resmi yang
                                menyatakan perpindahan tempat tinggal
                                seseorang atau keluarga ke lokasi baru.
                                <br><br>

                            </p>
                        </div>
                        <a href="status_sp.php" class="flex items-center justify-between group-hover:text-secondary">
                            <span class="text-sm text-orange-300">Cek Surat</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFA500" class="w-5 h-5 -translate-x-4 text-2xl
                                        opacity-0 transition duration-300
                                        group-hover:translate-x-0
                                        group-hover:opacity-100">
                                <path fill-rule="evenodd" d="M12.97
                                            3.97a.75.75 0 011.06 0l7.5
                                            7.5a.75.75 0
                                            010 1.06l-7.5 7.5a.75.75 0
                                            11-1.06-1.06l6.22-6.22H3a.75.75 0
                                            010-1.5h16.19l-6.22-6.22a.75.75 0
                                            010-1.06z" clip-rule="evenodd"></path>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="group relative bg-white dark:bg-teal-700
                            transition hover:z-[1] hover:shadow-2xl
                            hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="Image/contract.png" class="w-12" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold
                                        text-gray-700
                                        dark:text-white transition
                                        group-hover:text-secondary">
                                Cetak Surat Tidak Mampu
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300">
                                Klik Cetak Untuk Mencetak Surat yang sudah di ACC
                            </p>
                        </div>
                        <a href="cetak_stm.php" class="flex items-center
                                    justify-between
                                    group-hover:text-secondary">
                            <span class="text-sm text-orange-300">Cetak</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="#FFA500"
                                        class="w-5 h-5 -translate-x-4 text-2xl
                                        opacity-0 transition duration-300
                                        group-hover:translate-x-0
                                        group-hover:opacity-100">
                                        <path fill-rule="evenodd" d="M12.97
                                            3.97a.75.75 0 011.06 0l7.5
                                            7.5a.75.75 0
                                            010 1.06l-7.5 7.5a.75.75 0
                                            11-1.06-1.06l6.22-6.22H3a.75.75 0
                                            010-1.5h16.19l-6.22-6.22a.75.75 0
                                            010-1.06z" clip-rule="evenodd"></path>
                                    </svg>
                        </a>
                    </div>
                </div>
                <div class="group relative bg-gray-50 dark:bg-teal-800
                            transition hover:z-[1] hover:shadow-2xl
                            hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8 ">
                        <img src="Image/house.png" class="w-12" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold
                                        text-gray-700
                                        dark:text-white transition
                                        group-hover:text-secondary">
                                        Cetak Surat Pindah
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300">
                            Klik Cetak Untuk Mencetak Surat yang sudah di ACC
                            </p>
                        </div>
                        <a href="cetak_sp.php" class="flex items-center
                                    justify-between
                                    group-hover:text-secondary">
                            <span class="text-sm text-orange-300">Cetak</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="#FFA500"
                                    class="w-5 h-5 -translate-x-4 text-2xl
                                    opacity-0 transition duration-300
                                    group-hover:translate-x-0
                                    group-hover:opacity-100">
                                    <path fill-rule="evenodd" d="M12.97
                                        3.97a.75.75 0 011.06 0l7.5
                                        7.5a.75.75 0
                                        010 1.06l-7.5 7.5a.75.75 0
                                        11-1.06-1.06l6.22-6.22H3a.75.75 0
                                        010-1.5h16.19l-6.22-6.22a.75.75 0
                                        010-1.06z" clip-rule="evenodd"></path>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>