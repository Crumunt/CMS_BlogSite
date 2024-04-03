<?php
  require "../db/action.php";
  include "partials/header.php";
?>
<main>
  <div class="container mb-5">
    <div class="row d-flex justify-content-between align-items-center rounded-2 gap-2 p-3 shadow" id="postHeader">
      <div class="col-lg-7 col-sm-10 d-flex gap-2">
        <h1 class="text-uppercase text-white">Manage Posts</h1>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD POST</button>
        <?php include "partials/modal.php"; ?>
      </div>
      <div class="col-lg-4 col-sm-11">
        <input type="search" name="" id="" placeholder="Search by name or category" class="form-control">
      </div>
    </div>
  </div>
  <section>
    <div class="container py-3">
      <div class="row g-4 gap-1 d-flex justify-content-center align-items-stretch" id="contentWrapper" aria-label="Blogs">

      </div>
    </div>
  </section>
  
  <div class="container">
    <nav aria-label="Page navigation example">
      <ul class="pagination d-flex justify-content-center">
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