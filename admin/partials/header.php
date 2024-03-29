<?php
$activePage = basename($_SERVER["PHP_SELF"], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Owl's lounge</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/adminStyle.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- JS -->
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/chart.js" defer></script>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="../assets/logo.png" alt="">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hi Admin!</h5>
                        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link text-white fs-3 <?= ($activePage == 'index') ? "active" : "" ?>" href="index.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-3 <?= ($activePage == 'manage-post') ? "active" : "" ?>" href="manage-post.php">Manage Posts</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-users.php" class="nav-link text-white fs-3 <?= ($activePage == 'manage-users') ? "active" : "" ?>" aria-current="page">Manage Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-messages.php" class="nav-link text-white fs-3 <?= ($activePage == 'manage-messages') ? "active" : "" ?>" aria-current="page">Messages</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>