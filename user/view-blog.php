<?php
require "../db/action.php";
include "partials/header.php";

$blog_id = $_GET['blog_id'] ?? NULL;

if ($blog_id == NULL) {
	header('location: index.php?error=404(blogNotFound)');
	exit();
}

$data = showRecords($conn, 'tbl_blogs', "id=$blog_id");

$date = date_create($date[0][5]);

?>
<div class="container">
	<div class="blog-wrapper border p-5 p-3 shadow mt-5" id="blogViewWrapper">
		<div class="header border-5 border-black border-bottom">
			<h6 class="text-black-50"><?= (($data[0][4] != '') ? $data[0][4] : "No category") ?> | <?= date_format($date, "M d, Y") ?></h6>
			<h1 class="pb-2 fw-bold"><?= $data[0][1] ?></h1>
		</div>
		<div class="thumbnail mt-3 shadow">
			<img src="../assets/blog-assets/<?= $data[0][2] ?>" class="w-100" alt="">
		</div>
		<div class="blog-text mt-5">
			<pre class="fs-5 text-wrap">
				<?= $data[0][3] ?>
			</pre>
		</div>
	</div>
	<div class="button-wrapper d-flex justify-content-between align-items-center gap-2 mt-5">
		<?php $nextPostData = showRecords($conn, 'tbl_blogs', "id != $blog_id ORDER BY RAND() LIMIT 1") ?>

		<div class="button-group d-flex gap-2 align-items-center">
			<button class="btn btn-outline-danger d-flex align-items-center" id="likeButton" aria-label="<?= $blog_id ?>">
				<span class="material-symbols-outlined" id="heartIcon">favorite</span>
				<span class="like__label">Like</span>
			</button>
			<div class="count-group d-flex align-items-center gap-1">
				<p class="like__count fs-3" data-blog-id="<?= $blog_id ?>"><?= $data[0][6] ?></p>
				<span class="fs-6">likes</span>
			</div>
		</div>

		<div class="next-post-group d-flex flex-column align-items-end">
			<a href="?blog_id=<?= $nextPostData[0][0] ?>" class="btn btn-outline-muted d-flex justify-content-evenly align-items-center gap-1 btn fs-5 w-50">
				<span class="text-truncate w-75"><?= $nextPostData[0][1] ?></span>
				<span class="material-symbols-outlined">arrow_right_alt</span>
			</a>
		</div>
	</div>
</div>
<?php include "partials/footer.php"; ?>