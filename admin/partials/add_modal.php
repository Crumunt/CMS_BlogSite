<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD POST</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="formData">
          <div class="form-group mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="Enter title">
          </div>
          <div class="form-group mb-3" id="thumbnailForm">
            <label for="" class="form-label">Thumbnail</label>
            <input type="file" name="" id="thumbnail">
          </div>
          <div class="form-group">
            <label for="" class="form-label">Blog Contents</label>
            <div id="toolbar-container"></div>
            <div class="form-group mb-3 border" id="editor" style="min-height: 50vh; max-height: 70vh; overflow-y: scroll;">
            </div>
          </div>
          <div class="button-group d-flex gap-2 justify-content-end">
            <button class="btn btn-warning modal-button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-success modal-button" data-bs-dismiss="modal" onclick="saveData()">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>