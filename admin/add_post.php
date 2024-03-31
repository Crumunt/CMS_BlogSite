<?php include "partials/header.php"; ?>

<body>

    <div class="container mt-5">
        <form action="" method="POST">
            <div class="form-group mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" placeholder="Enter title">
            </div>


            <div class="form-group">
                <label for="" class="form-label">Blog Contents</label>
                <div id="toolbar-container"></div>
                <div class="form-group mb-3 border" id="editor" style="min-height: 50vh; max-height: 70vh; overflow-y: scroll;">

                </div>
            </div>
            <div class="button-group d-flex gap-2 justify-content-end">
                <button class="btn btn-warning">Cancel</button>
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <!-- CKEditor -->
    <script>
        ClassicEditor
            .create(document.getElementById('editor'))
            .catch(error => console.error(error))


        // DecoupledEditor
        //     .create(document.querySelector('#editor'))
        //     .then(editor => {
        //         const toolbarContainer = document.querySelector('#toolbar-container');

        //         toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>

</body>

</html>