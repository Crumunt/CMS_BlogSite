<?php
include "../db/action.php";
include "partials/header.html";
?>


<div id="hero-carousel" class="carousel slide shadow" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item c-item active" data-bs-interval="2500">
            <img src="../assets/pexels-christian-heitz-842711.jpg" class="d-block w-100 carouselImage" alt="...">
            <div class="carousel-caption top-0 mt-4">
                <h5 class="text-uppercase fs-3 mt-5">Travel</h5>
                <p class="display-1 fw-bolder text-capitalize">Enjoy the world</p>
                <button class="btn btn-primary px-4 py-2 fs 5 mt-5">Read More</button>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="2500">
            <img src="../assets/pexels-francesco-ungaro-1525041.jpg" class="d-block w-100 carouselImage" alt="...">
            <div class="carousel-caption top-0 mt-4">
                <h5 class="text-uppercase fs-3 mt-5">Relax</h5>
                <p class="display-1 fw-bolder text-capitalize">Feel the moment</p>
                <button class="btn btn-primary px-4 py-2 fs 5 mt-5">Read More</button>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="2500">
            <img src="../assets/pexels-irina-iriser-1379636.jpg" class="d-block w-100 carouselImage" alt="...">
            <div class="carousel-caption top-0 mt-4">
                <h5 class="text-uppercase fs-3 mt-5">Discover</h5>
                <p class="display-1 fw-bolder text-capitalize">Find more about the hidden gems</p>
                <button class="btn btn-primary px-4 py-2 fs 5 mt-5">Read More</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<section>
    <h1 class="text-center text-uppercase mt-5 fw-bolder">Latest Articles</h1>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-stretch">
            <?php
            $data = showRecords($conn, 'tbl_blogs');

            foreach (array_slice(array_reverse($data), 0, 3) as $latestArticle) {
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="card shadow">
                        <img src="../assets/blog-assets/<?= $latestArticle[2] ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $latestArticle[1] ?></h5>
                            <div class="card-text card__preview mb-2"> <?= nl2br($latestArticle[3]) ?> </div>
                            <a href="view-blog.php?blog_id=<?=$latestArticle[0]?>" class="btn btn-outline-success btn-md">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined d-flex align-items-center">favorite</span></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="row p-5 d-flex justify-content-between align-items-center text-white" id="about">
        <div class="col fs-5">
            <h5 class="text-center text-uppercase fs-1 mb-3">About</h5>
            <p class="text-center lh-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas deleniti, eos hic ab veritatis ipsa doloribus totam quasi aperiam corporis quas ipsam ad itaque id aut ducimus repellat quidem aspernatur laudantium recusandae repudiandae? Perferendis, libero? Incidunt officiis quae velit sequi corporis! Eligendi accusantium quod nam officia quam! Voluptatem, ratione quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima similique expedita soluta earum omnis aliquid asperiores, quisquam repudiandae pariatur accusamus dolore officiis, voluptatum praesentium neque quaerat dolorem? Placeat repudiandae laboriosam possimus consequuntur maxime eum, quod hic natus. Tenetur harum incidunt nostrum laborum magnam delectus, consectetur molestiae aperiam, dolor quibusdam maxime?</p>
        </div>
</section>

<section class="mt-5">
    <h1 class="text-center text-uppercase fw-bolder">Articles</h1>
    <div class="container py-3">
        <div class="row g-4 d-flex justify-content-center">
            <?php
            $data = showRecords($conn, 'tbl_blogs');

            foreach (array_slice($data, 0, 6) as $latestArticle) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="card shadow">
                        <img src="../assets/blog-assets/<?= $latestArticle[2] ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-truncate"><?= $latestArticle[1] ?></h5>
                            <pre class="card-text card__preview"> <?= $latestArticle[3] ?> </pre>
                            <a href="view-blog.php" class="btn btn-outline-success btn-md">Read More</a>
                            <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined d-flex align-items-center">favorite</span></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="button-wrapper d-flex justify-content-center">
                <a href="blogs.php">
                    <button class="btn btn-success mx-auto mt-5 px-5 fs-1">View More</button>
                </a>
            </div>
        </div>
</section>

<?php include "partials/footer.html"; ?>