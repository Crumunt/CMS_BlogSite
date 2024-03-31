let editor;
const MODAL = document.getElementById('formData')
MODAL.addEventListener('onload', showEditor())

function showEditor() {
	DecoupledEditor
            .create(document.querySelector('#editor'), {
            	ckfinder:
            	{
            		uploadUrl: 'https://ckeditor.com/apps/ckfinder/3.5.0/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            	}
            })
            .then(newEditor => {
            	editor = newEditor
                const toolbarContainer = document.querySelector('#toolbar-container');

                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch(error => {
                console.error(error);
            });
}

const CONTENT_WRAPPER = document.getElementById('contentWrapper')
window.onload = showBlogs()

function showBlogs() {

	let data = new FormData();
	data.append('loadAll', 'load')

	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		contentWrapper.innerHTML = this.responseText
	}

	xhr.open('POST', '/labFiles/blog_page/formHandlers/adminHandler.php', true)
	xhr.send(data)

}

function getFormData(id) {
	return document.getElementById(id).value;
}

function saveData() {
	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {
		console.log(editor.getData())
	}
	xhr.open('POST', '/labFiles/blog_page/manage-post.php', true);
}