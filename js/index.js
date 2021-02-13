document.addEventListener('DOMContentLoaded',function () {
    const btnAddComment = document.getElementById('add-comment');
    const modal = document.querySelector('.modal__form');
    const modalBtnClose = document.querySelector('.modal__btn-close');
    const btnSubmit = document.querySelector('.modal__btn');
   // const shadowBlock = document.querySelector('.shadow');
  // const loader = document.querySelector('.loader__wrapper');
    const notification = document.querySelector('.notification');
    const xhr = new XMLHttpRequest();  //применять без  перезагрузки страницы

    initModal();

    function initModal() {
        if (btnAddComment  && modal) {
            btnAddComment.addEventListener('click', showModal);
        }

        if (modalBtnClose) {
            modalBtnClose.addEventListener('click', hideModal);
        }
        }

        function showModal() {
            modal.classList.add('modal_show');
        }
        function hideModal() {
            modal.classList.remove('modal_show');
        }

        function validate (field) {
            field.classList.remove('validate-error');
            if (field.value ==='') {
                field.classList.add('validate-error');
                return false;
            }
            return true;
        }

        function setNotification(isSuccess) {
            const noticeTitle = notification.querySelector('.notification__title'),
                  noticeText = notification.querySelector('.notification__text');

            if (isSuccess) {
                noticeTitle.classList.add('success');
                noticeTitle.textContent = 'Успешно!';
                noticeText.classList.add('success');
                noticeText.textContent = 'Ваш комментарий сохранен!';
            } else {
                noticeTitle.classList.add('error');
                noticeTitle.textContent = 'Ошибка!';
                noticeText.classList.add('error');
                noticeText.textContent = 'Что-то пошло не так, пожалуйста, повторите попытку позднее';
            }
        }


/*
        function getComment(content) {
            const commentsList = document.querySelector('.comments__list');
            const commetnItem = document.createElement('li');
            commetnItem.classList.add('comments__item');
        
            const itemContent = `
                <img class="comments__avatar"
                src="https://secure.gravatar.com/avatar/5cdc09662dd539303e316621ec21b6be?s=65&d=https%3A%2F%2Fsecure.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D65&r=G"
                alt="">
                <div class="comments__wrapper">
                  <div class="comments__contact">
                    <span class="comments__name">${content.name}</span>
                    <time class="comments__time">${content.time}</time>
                  </div>
                  <p class="comments__desc">${content.comment}</p>
                </div>
            `;
            commetnItem.innerHTML = itemContent;
            commentsList.appendChild(commetnItem);
          }
*/


        btnSubmit.addEventListener('click', function() {
            xhr.open('POST', 'data.php');
            xhr.responseType = 'json';

            const formInput = [...document.querySelectorAll('[data-required]')]
            let isValid = formInput.every(item => validate(item));

            if (isValid) {
                xhr.send(new FormData(document.forms.comment));
            }

            xhr.onload = function () {
                if (xhr.status !== 200) {
                    setNotification(false);
                } else {
                    setNotification(true);

                //etComment(xhr.response);
                }

                setTimeout(function() {
                    hideModal();
                }, 3000);
            }
        })
    })