<?php

require_once 'autoloader.php';
require_once 'views/includes/header.php';


$home = new HomeController();

$pages = [
    'home', 'login', 'dashboard', 'add-product', 'update-product', 'delete-product',
    'products', 'add-fournisseur', 'update-fournisseur', 'delete-fournisseur', 'fournisseurs',
    'add-categorie', 'update-categorie', 'delete-categorie', 'categories',
    'sales', 'make-sale'
];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
        if (
            $page === 'dashboard' || $page === 'add-product' || $page === 'update-product' || $page === 'delete-product' ||
            $page === 'products' || $page === 'add-fournisseur' || $page === 'update-fournisseur' || $page === 'sales' ||
            $page === 'delete-fournisseur' || $page === 'fournisseurs' || $page === 'add-categorie' ||
            $page === 'update-categorie' || $page === 'delete-categorie' || $page === 'categories' ||  $page === 'make-sale'
        ) {
            // if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            $admin = new AdminController();
            $admin->index($page);
            // } else {
            //     include('views/includes/404.php');
            // }
        } else {
            $home->index($page);
        }
    } else {
        include('views/includes/404.php');
    }
} else {
    $home->index('home');
}
require_once 'views/includes/footer.php';
