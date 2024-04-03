<?php
  // require "../db/action.php";
  include "partials/header.php";
?>

  <main>
    <h1 class="text-center text-uppercase mt-3 mb-5">Dashboard</h1>
    <div class="container">
      <div class="row mt-5">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="card shadow card-wrapper text-white">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row gap-2">
                  <div class="align-self-center">
                    <img src="../assets/users-solid.svg" alt="">
                  </div>
                  <div class="">
                    <h4>Total Users</h4>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">18,000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="card shadow card-wrapper text-white">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row gap-2">
                  <div class="align-self-center">
                    <img src="../assets/blog-solid.svg" alt="">
                  </div>
                  <div class="">
                    <h4>Total Posts</h4>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">18,000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="card shadow card-wrapper text-white">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row gap-2">
                  <div class="align-self-center">
                    <img src="../assets/box-archive-solid.svg" alt="">
                  </div>
                  <div class="">
                    <h4>Archived Posts</h4>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">18,000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 p-3 mb-3 rounded-3" id="graphRow">
          <div class="col-sm-6 mb-5 mb-sm-0">
            <div class="card text-center">
              <div class="card-header">Popular Categories</div>
              <div class="card-body">
                <canvas id="doughnut"></canvas>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-5 mb-sm-0">
            <div class="card text-center">
              <div class="card-header">User Registration</div>
              <div class="card-body">
                <canvas id="bar"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

</body>

</html>