<?php include "partials/header.php"; ?>

<main>

    <div class="container mb-5">
        <div class="row d-flex justify-content-between align-items-center rounded-2 gap-2 p-3 shadow" id="postHeader">
            <div class="col-lg-7 col-sm-10 d-flex gap-2">
                <h1 class="text-uppercase text-white">Manage Categories</h1>
                <!-- <button class="btn btn-success" data-bs-toggle="tooltip" title="Add Category" data-bs-toggle="modal" data-bs-target="#categoryModal">Add Category</button> -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Category</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" id="categoryModal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" id="categoryForm" onsubmit="event.preventDefault()">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Category Name</label>
                                    <input type="text" name="category_name" id="category_name" class="form-control">
                                    <div class="invalid-feedback">
                                        Category has already been added.
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveButton" onclick="addCategory()">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-11">
                <input type="search" name="" id="" placeholder="Search by id or name" class="form-control">
            </div>
        </div>

        <table class="table table-striped mt-5 text-center" id="contentWrapper" aria-label="Categories">
            
        </table>
    </div>



</main>