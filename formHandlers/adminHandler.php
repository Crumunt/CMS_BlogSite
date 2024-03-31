<?php
require "../db/action.php";

$data = showRecords($conn, 'tbl_blogs');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['loadAll'])) {

		generateCard($conn);
	}
}


function generateCard($conn)
{
	$data = showRecords($conn, 'tbl_blogs');

	if (count($data) > 0) {
?>
		<div class="col-lg-4 col-md-6 col-sm-10">
			<div class="card shadow">
				<img src="../assets/blog-assets/1712f7586f666d524c87f1d5be5f5d78.jpg" class="card-img-top" alt="Fissure in Sandstone" />
				<div class="card-body">
					<h5 class="card-title border-bottom"><?=$data[0][1]?></h5>
					<p class="card-text text-secondary">Travel &bullet; Mar 26, 2024</p>
					<a href="#!" class="btn btn-warning">Edit</a>
					<a href="#!" class="btn btn-danger">Delete</a>
				</div>
			</div>
		</div>
<?php
	} else {
		echo "NO DATA FOUND";
	}
}
