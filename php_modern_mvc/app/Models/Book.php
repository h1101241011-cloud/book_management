<?php

namespace App\Models;

// Definisikan Exception kustom untuk Book
class BookException extends \Exception {}

class Book {
    // Properti untuk title dan author [cite: 321]
    private string $title;
    private string $author;

    // Constructor untuk validasi input [cite: 308, 322]
    public function __construct(string $title, string $author) {
        if (empty($title) || empty($author)) {
            // Lempar exception jika validasi gagal [cite: 308]
            throw new BookException("Judul dan Author tidak boleh kosong!");
        }
        $this->title = $title;
        $this->author = $author;
    }

    // Getter untuk title [cite: 322]
    public function getTitle(): string {
        return $this->title;
    }

    // Getter untuk author [cite: 322]
    public function getAuthor(): string {
        return $this->author;
    }
}