<?php include "partials/header.php"; ?>

<main>

    <div class="container mb-5">
        <div class="row d-flex justify-content-between align-items-center rounded-2 gap-2 p-3 shadow" id="postHeader">
            <div class="col-lg-7 col-sm-10 d-flex gap-2">
                <h1 class="text-uppercase text-white">Manage Categories</h1>
                <!-- <button class="btn btn-success" data-bs-toggle="tooltip" title="Add Category" data-bs-toggle="modal" data-bs-target="#categoryModal">Add Category</button> -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Category</button>
            </div>

            <?php include "partials/modal.php"; ?>
            
            <div class="col-lg-4 col-sm-11">
                <input type="search" name="" id="" placeholder="Search by id or name" class="form-control">
            </div>
        </div>

        <table class="table table-striped mt-5 text-center" id="contentWrapper" aria-label="Categories">
            
        </table>
    </div>



</main>