<?php
session_start();
session_unset(); // Menghapus semua variabel session
session_destroy(); // Menghancurkan session
header("Location: ../auth/login.php"); // Redirect ke halaman login
exit; // Pastikan script berhenti setelah redirect

// Optional: You can also add a message to inform the user about successful logout
