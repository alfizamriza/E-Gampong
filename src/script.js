// Fungsi untuk menampilkan popup sukses
function showSuccessPopup() {
    var popup = document.getElementById("popup");
    popup.innerHTML = "<div class='bg-white p-8 rounded'><p>Formulir berhasil dikirim! Terima kasih.</p></div>";
    popup.classList.remove("hidden");

    // Setelah beberapa detik, sembunyikan popup (opsional)
    setTimeout(function() {
        hidePopup();
    }, 3000); // 3000 milidetik (3 detik)
}

// Fungsi untuk menyembunyikan popup
function hidePopup() {
    var popup = document.getElementById("popup");
    popup.innerHTML = ""; // Kosongkan konten popup
    popup.classList.add("hidden");
}

// Fungsi yang akan dipanggil saat tombol "Kirim" pada formulir diklik
function submitForm() {
    // Lakukan aksi yang diperlukan saat tombol "Kirim" diklik, misalnya, kirim formulir
    // Di sini, Anda dapat menambahkan logika untuk mengirim formulir atau tindakan lainnya.
    // Contoh: document.getElementById("myForm").submit();
    
    // Setelah itu, tampilkan popup sukses
    window.location.href = "index.html";
    showSuccessPopup();
}

// Menggunakan event listener untuk menampilkan popup saat formulir dikirim
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah formulir dikirim (mencegah pembaruan halaman)
    showSuccessPopup();
});
