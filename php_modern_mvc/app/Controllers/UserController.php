<?php

namespace App\Controllers;

use App\Models\User; // [cite: 132]
use Throwable; // [cite: 133]

class UserController {
    public function register(string $name) { // [cite: 135]
        try {
            $user = new User($name); // [cite: 137]
            $this->renderView($user); // [cite: 138]
        } catch (Throwable $e) { // [cite: 139]
            echo "Terjadi error: " . $e->getMessage(); // [cite: 140]
        } finally {
            echo "\nProses pendaftaran selesai."; // [cite: 142]
        }
    }

    private function renderView(User $user) { // [cite: 145]
        require __DIR__ . '/../Views/user_view.php'; // [cite: 146]
    }
}