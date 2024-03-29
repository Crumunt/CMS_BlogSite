<?php
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
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card shadow">
                    <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sunset</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="view-blog.php" class="btn btn-outline-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm text-center"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card shadow">
                    <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sunset</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="" class="btn btn-outline-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card shadow">
                    <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sunset</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                        <a href="" class="btn btn-outline-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="row p-5 d-flex justify-content-between align-items-center text-white" id="about">
        <div class="col fs-5">
            <h5 class="text-center text-uppercase fs-1 mb-3">About</h5>
            <p class="text-center lh-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas deleniti, eos hic ab veritatis ipsa doloribus totam quasi aperiam corporis quas ipsam ad itaque id aut ducimus repellat quidem aspernatur laudantium recusandae repudiandae? Perferendis, libero? Incidunt officiis quae velit sequi corporis! Eligendi accusantium quod nam officia quam! Voluptatem, ratione quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima similique expedita soluta earum omnis aliquid asperiores, quisquam repudiandae pariatur accusamus dolore officiis, voluptatum praesentium neque quaerat dolorem? Placeat repudiandae laboriosam possimus consequuntur maxime eum, quod hic natus. Tenetur harum incidunt nostrum laborum magnam delectus, consectetur molestiae aperiam, dolor quibusdam maxime?</p>
        </div>
       <!--  <div class="col-lg-3 d-flex gap-2">
            <div class="icon-wrapper">
                <img src="../assets/github.svg" alt="Social Link Icon">
            </div>
            <div class="icon-wrapper">
                <img src="../assets/facebook.svg" alt="Social Link Icon">
            </div>
            <div class="icon-wrapper">
                <img src="../assets/x-twitter.svg" alt="Social Link Icon">
            </div>
        </div> -->
    </div>
</section>

<section class="mt-5">
    <h1 class="text-center text-uppercase fw-bolder">Articles</h1>
    <div class="container py-3">
        <div class="row g-4 d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                       <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card shadow">
                    <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
                        <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
                        <a href="" class="btn btn-success btn-md">Read More</a>
                        <a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-wrapper d-flex justify-content-center">
            <button class="btn btn-success mx-auto mt-5 px-5 fs-1">View More</button>
        </div>
    </div>
</section>

<?php include "partials/footer.html";?>