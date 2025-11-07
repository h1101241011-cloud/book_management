<?php

namespace App\Models;

class UserException extends \Exception {} // [cite: 116]

class User {
    private string $name; // [cite: 118]

    public function __construct(string $name) { // [cite: 119]
        if (empty($name)) { // [cite: 120]
            throw new UserException("Nama tidak boleh kosong!"); // [cite: 121]
        }
        $this->name = $name; // [cite: 123]
    }

    public function getName(): string { // [cite: 125]
        return $this->name; // [cite: 126]
    }
}