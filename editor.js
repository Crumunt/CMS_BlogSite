const CKEditor = window.ClassicEditor

const editor = document.getElementById('editor');

CKEditor
    .create(document.getElementById('editor'))
    .catch(error => console.error(error))
