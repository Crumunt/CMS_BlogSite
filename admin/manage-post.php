<?php
include "partials/header.php";
?>
<main>
  <div class="container mb-5">
    <div class="row d-flex justify-content-between align-items-center rounded-2 gap-2 p-3 shadow" id="postHeader">
      <div class="col-lg-7 col-sm-10 d-flex gap-2">
        <h1 class="text-uppercase text-white">Manage Posts</h1>
        <!-- <button class="btn btn-success" data-bs-toggle="tooltip" title="Add Post">ADD POST</button> -->
        <?php include "partials/add_modal.php"; ?>
      </div>
      <div class="col-lg-4 col-sm-11">
        <input type="search" name="" id="" placeholder="Search by name or category" class="form-control">
      </div>
    </div>
  </div>
  <section>
    <div class="container py-3">
      <div class="row g-4 d-flex justify-content-center" id="contentWrapper">
        <!-- <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10">
          <div class="card shadow">
            <img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            <div class="card-body">
              <h5 class="card-title border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, rerum.</h5>
              <p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
              <a href="#!" class="btn btn-warning">Edit</a>
              <a href="#!" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <div class="container">
    <nav aria-label="Page navigation example  ">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</main>
</body>
</html>