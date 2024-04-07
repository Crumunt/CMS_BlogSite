<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Owl's Lounge</title>

    <link rel="stylesheet" href="../css/userStyle.css">
    <script src="../js/user.js" defer></script>

    <?php include "../includes/font-bootstrap-link.html" ?>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex gap-2 align-items-center" href="index.php">
                    <img src="../assets/logo.png" alt="Brand Logo"
                        class="logo-icon">
                    <h3 class="fw-bold">The Owl's Lounge</h3>
                </a>
                <button class="navbar-toggler bg-light-subtle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link mx-2 fs-5" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 fs-5" href="blogs.php">Blogs</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="btn btn-success btn-rounded mt-1 fs-5" href="../index.php">Log in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>