const LIKE_BUTTON = document.querySelector('#likeButton')
const HEART_ICON = document.querySelector('#heartIcon')
LIKE_BUTTON.addEventListener('click', ()=> {

	if(HEART_ICON.textContent == 'favorite') {
		HEART_ICON.textContent = 'heart_plus'
		LIKE_BUTTON.classList.remove('btn-outline-danger')
		LIKE_BUTTON.classList.add('btn-danger')
		return
	}

	LIKE_BUTTON.classList.remove('btn-danger')
	LIKE_BUTTON.classList.add('btn-outline-danger')

	HEART_ICON.textContent = 'favorite'
})