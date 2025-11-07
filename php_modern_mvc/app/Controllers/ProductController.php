<?php

namespace App\Controllers;

use App\Models\Product; // [cite: 252]
use Throwable; // [cite: 253]

class ProductController {
    public function add(string $name, float $price) { // [cite: 255]
        try {
            $product = new Product($name, $price); // [cite: 257]
            $this->renderView($product); // [cite: 258]
        } catch (Throwable $e) { // [cite: 259]
            // Logging error ke file [cite: 261]
            file_put_contents(
                __DIR__ . '/../../error.log', 
                date('Y-m-d H:i:s') . ' - ' . $e->getMessage() . PHP_EOL, 
                FILE_APPEND
            );
            echo "Terjadi error: " . $e->getMessage();
        } finally { // [cite: 262]
            echo "\nProses penambahan produk selesai."; // [cite: 263]
        }
    }

    private function renderView(Product $product) { // [cite: 266]
        require __DIR__ . '/../Views/product_view.php'; // [cite: 267, 270]
    }
}