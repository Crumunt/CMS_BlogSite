<?php
require "../db/action.php";

$data = showRecords($conn, 'tbl_blogs');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['loadBlogs'])) {
		generateCards($conn);
	} elseif (isset($_POST['uploadBlog'])) {
		uploadBlog($conn);
	} elseif (isset($_POST['addCategory'])) {
		addCategory($conn);
	} elseif (isset($_POST['loadCategories'])) {
		loadCategories($conn);
	} elseif (isset($_POST['loadBlog'])) {
		loadBlog($conn);
	} elseif (isset($_POST['updateBlog'])) {
		updateBlog($conn);
	}elseif(isset($_POST['confirmDelete'])) {
		loadBlog($conn);
	}elseif(isset($_POST['finalizeDelete'])) {
		deleteBlog($conn);
	}
}


function generateCards($conn)
{
	$data = showRecords($conn, 'tbl_blogs');

	if (count($data) > 0) {
		foreach ($data as $blog_content) {
?>
			<div class="col-xl-3 col-lg-4 col-md-5 col-sm-10">
				<div class="card shadow">
					<img src="../assets/blog-assets/<?= $blog_content[2] ?>" class="card-img-top" alt="Fissure in Sandstone" />
					<div class="card-body">
						<h5 class="card-title border-bottom text-truncate"><?= $blog_content[1] ?></h5>
						<p class="card-text text-secondary"><?= $blog_content[4] ?> &bullet; </p>
						<button class="btn btn-warning" value="<?= $blog_content[0] ?>" onclick="loadBlog(this.value)" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
							Edit
						</button>
						<button class="btn btn-danger" value="blog_id=<?= $blog_content[0] ?>" onclick="confirmMessage(this.value)" data-bs-toggle="modal" data-bs-target="#confirmDelete">Delete</button>
					</div>
				</div>
			</div>
		<?php
		}
	} else {
		echo "NO DATA FOUND";
	}
}

function uploadBlog($conn)
{

	$data = [];
	// $data = $_POST['data'];
	foreach ($_POST as $name => $value) {
		if ($name != 'uploadBlog' && $name != 'blog_thumbnail') {
			$data[$name] = ($name == 'blog_content' || 'blog_title') ? str_replace("'", "\'", $value) : $value;
		}
	}

	$image = processImage();

	if(!empty($image)) {
		$data['blog_thumbnail'] = $image;
	}

	try {
		$action = addQuery($conn, $data, 'tbl_blogs');

		if ($action) {
			echo "Blog has been added successfully";
			exit();
		} else {
			echo "There was an error uploading the blog, please try again.";
			exit();
		}
	} catch (Exception $e) {
		echo "Error: " . $e;
	}
}

function processImage()
{

	// PROCESS IMAGE
	if (!empty($_FILES['blog_thumbnail'] ?? NULL)) {

		// GET NECESSARY FILE INFO
		$fileName = $_FILES['blog_thumbnail']['name'];
		// GET FILE EXTENSION
		$fileExtension = end(explode(".", $fileName));
		// RENAME IMAGE TO Blog_Thumbnail and some random number
		$fileName = "Blog_Thumbnail_" . rand(0, 99999) . "." . $fileExtension;

		$fileTempName = $_FILES['blog_thumbnail']['tmp_name'];

		$uploadDirectory = "../assets/blog-assets/";

		// SET UPLOAD DESTINATION(WHERE FILE WILL END UP IN)
		$uploadDestination = $uploadDirectory . $fileName;


		if (isset($fileName)) {

			$uploadStatus = move_uploaded_file($fileTempName, $uploadDestination);

			if (!$uploadStatus) {
				echo "There was an error uploading the thubmnail";
				exit();
			}
		}

		return $fileName;
	}
}

function addCategory($conn)
{

	$category = $_POST['category_name'] ?? NULL;

	if ($category == NULL) {
		echo "Invalid input.";
		exit();
	}


	try {
		$checkDuplication = showRecords($conn, 'tbl_categories', "category_name = '$category'");

		if ($checkDuplication) {
			echo "error";
			exit();
		}

		addQuery($conn, ['category_name' => $category], 'tbl_categories');
	} catch (Exception $e) {
		echo "Error: " . $e;
		exit();
	}
}

function loadCategories($conn)
{

	$data = showRecords($conn, 'tbl_categories');

	if (count($data) > 0) {
		foreach ($data as $category) {
		?>
			<tr>
				<th><?= $category[1] ?></th>
				<td>
					<button class="btn btn-warning">Edit</button>
					<button class="btn btn-danger">Delete</button>
				</td>
			</tr>

<?php
		}
	} else {
		echo "No data found";
	}
}

function loadBlog($conn)
{

	$blog_id = $_POST['blog_id'] ?? NULL;


	if ($blog_id == NULL) return "Blog not Found";

	$data = showRecords($conn, 'tbl_blogs', "id = $blog_id");

	// turn data into json
	echo json_encode($data);
}

function updateBlog($conn)
{

	$blog_id = $_POST['blog_id'];

	$data = [];

	foreach ($_POST as $name => $value) {
		if ($name != 'updateBlog' && $name != 'blog_thumbnail' && $name != 'blog_id') {
			$data[$name] = ($name == 'blog_content' || 'blog_title') ? str_replace("'", "\'", $value) : $value;
		}
	}

	$image = processImage();

	if(!empty($image)) {
		$data['blog_thumbnail'] = $image;
	}

	try {
		updateQuery($conn, $data, 'tbl_blogs', ['id' => $blog_id]);
	} catch (Exception $e) {
		echo "Error: " . $e;
		exit();
	}

	echo "Blog has been updated";
}

function deleteBlog($conn) {

	$blog_id = $_POST['blog_id'];

	try {
		deleteQuery($conn, 'tbl_blogs', ['id' => $blog_id]);
	} catch (Exception $e) {
		echo 'Error' . $e;
	}

	echo "Blog has been successfully deleted";

}