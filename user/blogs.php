<?php
require "../db/action.php";
include "partials/header.html";
?>

<div class="container">
	<div class="row d-flex justify-content between mt-4">
		<div class="col-6">
			<form action="" method="post" class="d-flex gap-2 align-items-center">
				<label for="" class="form-label">Search</label>
				<input type="search" name="" id="" class="form-control" placeholder="Search by title or category">
			</form>
		</div>
		<div class="col-6 d-flex align-items-center gap-2">
			<label for="" class="form-label">Filter</label>
			<select name="" id="" class="form-select">
				<option value="">Sort by</option>
				<option value="most_liked">Most Liked</option>
				<option value="least_liked">Least Liked</option>
				<option value="upload_date">Upload Date</option>
			</select>
		</div>
	</div>

	<section class="mt-5">
		<div class="container py-3">
			<div class="row g-4 d-flex justify-content-center">
				<?php
				$data = showRecords($conn, 'tbl_blogs');

				foreach ($data as $article) {
				?>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="card shadow">
							<img src="../assets/blog-assets/<?= $article[2] ?>" class="card-img-top viewThumbnail" alt="Article thumbnail" />
							<div class="card-body">
								<h5 class="card-title border-bottom text-truncate"><?= $article[1] ?></h5>
								<p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
								<a href="view-blog.php?blog_id=<?=$article[0]?>" class="btn btn-outline-success btn-md">Read More</a>
								<a href="" class="btn btn-outline-danger btn-sm"><span class="material-symbols-outlined">favorite</span></i></a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>
</div>

<?php include "partials/footer.html"; ?>