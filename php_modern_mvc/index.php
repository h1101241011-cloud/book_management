<?php

// 1. Muat autoloader Composer [cite: 153]
require __DIR__ . '/vendor/autoload.php';

// 2. Import semua Controller yang akan digunakan
use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\Controllers\BookController; // <-- Controller untuk tugas

// --- Contoh dari Modul (Bisa dihapus/diberi komentar) ---
echo "<h2>--- Hasil Contoh User ---</h2>";
$userController = new UserController(); // [cite: 155]
$userController->register(""); // [cite: 157]
$userController->register("Jony"); // [cite: 159]
echo "<hr>";

echo "<h2>--- Hasil Contoh Product ---</h2>";
$productController = new ProductController(); // [cite: 293]
$productController->add("Laptop", 15000000); // [cite: 294]
$productController->add("Mouse", 0); // Contoh trigger error
echo "<hr>";
// --- Akhir Contoh Modul ---


// --- BAGIAN UNTUK TUGAS MANAJEMEN BUKU ---

// 3. Tampilkan form HTML [cite: 315]
// (Form ini akan mengirim data ke file index.php ini sendiri)
include __DIR__ . '/app/Views/book_form.php';

// 4. Tangani data POST dari book_form.php [cite: 319]
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title']) && isset($_POST['author'])) {
    
    echo "<h2>--- Hasil Penambahan Buku ---</h2>";
    
    // 5. Ambil data dari form
    $title = $_POST['title'];
    $author = $_POST['author'];

    // 6. Buat objek BookController dan panggil metodenya
    $bookController = new BookController();
    $bookController->addBook($title, $author);
}