<?php
require "../db/action.php";
include "partials/header.html";

$blog_id = $_GET['blog_id'] ?? NULL;

if($blog_id == NULL) {
	header('location: index.php?error=404(blogNotFound)');
	exit();
}

$data = showRecords($conn, 'tbl_blogs', "id=$blog_id");

$date = date_create($date[0][5]);

?>
<div class="container">
	<div class="blog-wrapper border p-5 p-3 shadow mt-5" id="blogViewWrapper">
		<div class="header border-5 border-black border-bottom">
			<h6 class="text-black-50"><?=(($data[0][4] != '') ? $data[0][4]: "No category")?> | <?= date_format($date, "M d, Y. H:i a") ?></h6>
			<h1 class="pb-2"><?=$data[0][1]?></h1>
		</div>
		<div class="thumbnail mt-3 shadow">
			<img src="../assets/blog-assets/<?=$data[0][2]?>" class="w-100" alt="">
		</div>
		<div class="blog-text mt-5">
			<div class="fs-5">
				<?= $data[0][3] ?>
			</div>
		</div>
	</div>
	<div class="button-wrapper d-flex justify-content-between gap-2 mt-5">
		<button class="d-flex align-items-center gap-1 btn fs-5"><span class="material-symbols-outlined">arrow_left_alt</span> Previous Post Lorem ipsum dolor, sit amet.</button>
		<button class="btn btn-outline-danger d-flex align-items-center" id="likeButton"><span class="material-symbols-outlined" id="heartIcon">favorite</span></button>
		<button class="d-flex align-items-center gap-1 btn fs-5">Next Post Lorem ipsum dolor, sit amet. <span class="material-symbols-outlined">arrow_right_alt</span></button>
	</div>
</div>
<?php include "partials/footer.html"; ?>