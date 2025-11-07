<?php

namespace App\Models;

class ProductException extends \Exception {} // [cite: 232]

class Product {
    private string $name; // [cite: 234]
    private float $price; // [cite: 235]

    public function __construct(string $name, float $price) { // [cite: 236]
        if (empty($name) || $price <= 0) { // [cite: 237]
            throw new ProductException("Nama produk tidak boleh kosong dan harga harus > 0"); // [cite: 238]
        }
        $this->name = $name; // [cite: 240]
        $this->price = $price; // [cite: 241]
    }

    public function getName(): string { // [cite: 243]
        return $this->name; // [cite: 244]
    }

    public function getPrice(): float { // [cite: 246]
        return $this->price; // [cite: 247]
    }
}