<?php

namespace App\Controllers;

// Import class yang dibutuhkan
use App\Models\Book;
use App\Models\BookException;
use Throwable;

class BookController {

    // Metode untuk menambah buku [cite: 310, 325]
    public function addBook(string $title, string $author) {
        
        // Gunakan try-catch-finally untuk error handling [cite: 311]
        try {
            // Buat objek Book baru (ini akan memvalidasi) [cite: 310]
            $book = new Book($title, $author);

            // Panggil view untuk menampilkan hasil [cite: 312]
            $this->renderView($book);

        } catch (BookException $e) {
            // Tangkap error spesifik dari Book
            // Lakukan logging ke file [cite: 302, 311]
            file_put_contents(
                __DIR__ . '/../../error.log',
                date('Y-m-d H:i:s') . ' - Book Error: ' . $e->getMessage() . PHP_EOL,
                FILE_APPEND
            );
            // Tampilkan pesan error ke user
            echo "Terjadi error: " . $e->getMessage();

        } catch (Throwable $t) {
            // Tangkap error umum lainnya
            file_put_contents(
                __DIR__ . '/../../error.log',
                date('Y-m-d H:i:s') . ' - General Error: ' . $t->getMessage() . PHP_EOL,
                FILE_APPEND
            );
            echo "Terjadi error umum: " . $t->getMessage();

        } finally {
            // Blok ini selalu dieksekusi [cite: 311]
            echo "\nProses penambahan buku selesai.";
        }
    }

    // Metode privat untuk memanggil file view [cite: 326]
    private function renderView(Book $book) {
        require __DIR__ . '/../Views/book_view.php'; // [cite: 312]
    }
}