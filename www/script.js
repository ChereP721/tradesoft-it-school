document.addEventListener('DOMContentLoaded', function () {
    const btnAddComment = document.getElementById('addComment');
    const modal = document.getElementById('modal');
    const btnSubmit = document.getElementById('btnSubm');

    const xhr = new XMLHttpRequest();

    initModal();

    function initModal() {
        if (btnAddComment && modal) {
            btnAddComment.addEventListener('click', showModal);
        }
        if (btnSubmit) {
            btnSubmit.addEventListener('click', hideModal);
        }
    }

    function showModal() {
        modal.classList.remove('modal');
        modal.classList.add('modal_show');
    }

    function hideModal() {
        modal.classList.remove('modal_show');
        modal.classList.remove('modal');
    }

    function validation(field) {
        field.classList.remove('validate-error');
        if (field.value === '') {
            field.classList.add('validate-error');
            return false;
        }
        return true;
    }

    function getComment(content) {
        const commentsList = document.getElementById('comments__list');
        const commentItem = document.createElement('li');
        commentItem.classList.add('comments__item');

        const itemContent = `
            <img class="comments__avatar"
            src="https://secure.gravatar.com/avatar/5cdc09662dd539303e316621ec21b6be?s=65&d=https%3A%2F%2Fsecure.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D65&r=G"
            alt="">
            <div class="comments__wrapper">
              <div class="comments__contact">
                <span class="comments__name">${content.name}</span>
                <time class="comments__time">${content.email}</time>
              </div>
              <p class="comments__desc">${content.comm}</p>
            </div>
        `;
        commentItem.innerHTML = itemContent;
        commentsList.appendChild(commentItem);
    }

    btnSubmit.addEventListener('click', function (e) {
        e.preventDefault();
        xhr.open('POST', 'api.php');
        xhr.responseType = 'json';

        const formInputs = [...document.querySelectorAll('[data-required]')];
        let isValid = formInputs.every(item => validation(item));

        if (isValid) {
            xhr.send(new FormData(document.forms.commentForm));
        }
    })

    xhr.onload = function () {
        if (xhr.status == 200) {
            getComment(xhr.response);
        }

        setTimeout(function () {
            hideModal();
        }, 3000);
    }

    xhr.onerror = function () {
        alert('request failed')
    }

});