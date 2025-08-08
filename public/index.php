<?php
session_start();
$page = $_GET['page'] ?? 'login';

switch($page) {
    case 'login':
        include '../views/auth/login.php';
        break;
    case 'dashboard':
        include '../views/dashboard/index.php';
        break;
    default:
        echo "404 Not Found";
}
?>