let editor;

const MODAL = document.getElementById('formData')

if (MODAL) {

	MODAL.addEventListener('onload', showEditor())

	const MODAL_CONTROLS = document.querySelectorAll("button[data-bs-dismiss=modal]");

	MODAL_CONTROLS.forEach(control => {
		control.addEventListener('click', resetForm)
	})

}

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

if (CONTENT_WRAPPER) CONTENT_WRAPPER.onload = loadContents()

function loadContents() {

	let contentToBeLoaded = CONTENT_WRAPPER.getAttribute('aria-label')

	let data = new FormData();
	data.append(`load${contentToBeLoaded}`, 'load')

	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		contentWrapper.innerHTML = this.responseText
	}

	xhr.open('POST', '/labFiles/blog_page/formHandlers/adminHandler.php', true)
	xhr.send(data)

}

function getFormData(id) {
	return document.getElementById(id);
}

function saveData() {

	// process file input and return relevant information such as the object and its details
	let processedImageFile = processImageFileInput(getFormData('thumbnail'))

	// instantiate new FormData to store key value pairs
	let data = new FormData();

	// add key value pairs for each item in the form
	data.append('uploadBlog', 'uploadBlog');

	data.append('blog_title', getFormData('blog_title').value)

	data.append('blog_thumbnail', processedImageFile[0], processImageFileInput[1])

	data.append('category_name', getFormData('category_name').value)

	data.append('blog_content', editor.getData())

	// create new XMLHttpRequest
	let xhr = new XMLHttpRequest();

	// check if readystate has changed, run function if so
	xhr.onreadystatechange = function () {
		if (this.readyState == 4) {
			resetForm()
			loadContents();
			// console.log(this.responseText);
			getFormData('confirmMessage').textContent = this.responseText;
		}
	}

	// open url to send data
	xhr.open('POST', '/labFiles/blog_page/formHandlers/adminHandler.php', true);
	// send FormData variable
	xhr.send(data)
}

function addCategory() {

	let data = new FormData();

	data.append('addCategory', 'add');
	data.append('category_name', getFormData('category_name').value)

	console.log(data);

	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (this.readyState == 4) {
			getFormData('category_name').value = ''

			if (this.responseText == 'error') {
				getFormData('category_name').classList.add('is-invalid')
				return;
			}

			getFormData('category_name').classList.remove('is-invalid')

			loadContents();
		}
	}

	xhr.open('POST', '/labFiles/blog_page/formHandlers/adminHandler.php', true);
	xhr.send(data);
}


function loadBlog(button) {

	let blog_id = button

	let data = new FormData()

	data.append("loadBlog", "load");
	data.append("blog_id", blog_id);

	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (this.readyState == 4) {
			let jsonData = this.responseText
			let data = JSON.parse(jsonData)

			getFormData('modalStatus').textContent = 'Update Post'
			getFormData('editorController').textContent = 'Update';
			getFormData('editorController').value = blog_id;
			getFormData('editorController').setAttribute('onclick', 'updateBlog(this.value)')

			getFormData('blog_title').value = data[0][1];
			editor.setData(data[0][3]);
			getFormData('category_name').value = data[0][4];
		}
	}

	xhr.open("POST", "/labFiles/blog_page/formHandlers/adminHandler.php", true);

	xhr.send(data);

}

function updateBlog(buttonValue) {

	let blog_id = buttonValue

	let data = new FormData()

	data.append('updateBlog', 'update')
	data.append('blog_id', blog_id);
	data.append('blog_title', getFormData('blog_title').value)
	data.append('category_name', getFormData('category_name').value)
	data.append('blog_content', editor.getData())

	let fileInput = getFormData('thumbnail');

	if (fileInput.files.length > 0) {

		let updateImageFile = processImageFileInput(fileInput);

		data.append('blog_thumbnail', updateImageFile[0], updateImageFile[1])
	}

	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if (this.readyState == 4) {
			getFormData('confirmMessage').textContent = this.responseText
			console.log(this.responseText)
			loadContents();
		}
	}

	xhr.open('POST', '/labFiles/blog_page/formHandlers/adminHandler.php', true)

	xhr.send(data)
}

function processImageFileInput(fileInput) {

	let file = fileInput.files[0]

	let fileValues = file.name

	console.log([file, fileValues].length)

	return [file, fileValues]

}

function resetForm() {

	getFormData('formData').reset();
	editor.setData('');

	if (getFormData('modalStatus').textContent == 'Update Post') {
		getFormData('modalStatus').textContent = 'Add Post'
		getFormData('editorController').textContent = 'Save';
		getFormData('editorController').removeAttribute('value')
		getFormData('editorController').setAttribute('onclick', 'saveData()')
	}

}

function confirmMessage(id) {

	let toDeleteId = id.split("=")[1];

	let data = new FormData();

	data.append('confirmDelete', 'confirm');
	data.append('blog_id', toDeleteId);

	let xhr = new XMLHttpRequest()

	xhr.onreadystatechange = function() {
		if(this.readyState == 4) {
			let data = JSON.parse(this.responseText)

			getFormData('confirmDeleteButton').setAttribute('value', data[0][0]);
			getFormData('toDeleteName').textContent = data[0][1];
		}
	}

	xhr.open("POST", "/labFiles/blog_page/formHandlers/adminHandler.php", true);

	xhr.send(data);

}

function deleteRecord(id) {

	let data = new FormData();

	data.append('finalizeDelete', 'delete')
	data.append('blog_id', id);

	console.log(id)

	let xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {
		if(this.readyState == 4) {
			getFormData('confirmMessage').textContent = this.responseText
			console.log(this.responseText)
			loadContents();
		}
	}

	xhr.open("POST", "/labFiles/blog_page/formHandlers/adminHandler.php", true);

	xhr.send(data);

}