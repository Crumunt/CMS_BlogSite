
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD POST</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalStatus" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalStatus">Add Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" id="formData" onsubmit="event.preventDefault()">
          <div class="form-group mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" id="blog_title" placeholder="Enter title" required>
          </div>
          <div class="form-group mb-3" id="thumbnailForm">
            <label for="" class="form-label">Thumbnail</label>
            <input type="file" name="blog_thumbnail" id="thumbnail">
          </div>
          <div class="form-group mb-3">
            <label for="" class="form-label">Category</label>
            <select name="category_name" id="category_name" class="form-select">
              <option value="">Select Category~</option>
              <?php 
                $data = showRecords($conn, 'tbl_categories');
                
                foreach($data as $category) {
                  echo "<option value=".$category[1].">". $category[1] ."</option>";
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Blog Contents</label>
            <div id="toolbar-container"></div>
            <div class="form-group mb-3 border" id="editor" style="min-height: 40vh; max-height: 70vh; overflow-y: scroll;">
            </div>
          </div>
          <div class="button-group d-flex gap-2 justify-content-end">
            <button class="btn btn-warning modal-button" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success modal-button" id="editorController" data-bs-dismiss="modal" onclick="saveData()">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>