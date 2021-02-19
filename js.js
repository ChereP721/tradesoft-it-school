document.addEventListener('DOMContentLoaded', function(){
   const btnAddComment = document.getElementById('add-comment');
   const modal = document.querySelector('.modal');
   const modalBtnClose = document.querySelector('.model__btn-close');
   const btnSubmit = document.querySelector('.modal__btn');
   const notification = document.querySelector('.notice');

    const shadowBlock = document.querySelector('.shadow');
    const loader = document.querySelector('.loader__wrapper');
   //const btnAddComment = document.querySelector('');
   //const btnAddComment = document.querySelector('');

    const xhr = new XMLHttpRequest();

    initModal();

    function initModal(){
        if(btnAddComment) {
            btnAddComment.addEventListener('click',showModal);

        }
        if(modalBtnClose) {
            modalBtnClose.addEventListener('click',hideModal);
        }
    }

    function showModal(){
        modal.classList.add('modal_show');
    }

    function hideModal(){
        modal.classList.remove('modal_show');
    }

    function validate(field) {
        field.classList.remove('validate-error');
        if(field.value === ''){
            field.classList.add('validate-error');
            return false;
        }
        return true;
    }


    function setNotification(isSuccess){
        const noticeTitle = notification.querySelector('.notice__title'),
            noticeText = notification.querySelector('.notice__text');
        if(isSuccess){
            noticeTitle.classList.add('success');
            noticeTitle.textContent = 'Успешно'
            noticeText.textContent = 'Ваши данные приняты';
        } else {
            noticeTitle.classList.add('error');
            noticeTitle.textContent = 'Ошибка'
            noticeText.textContent = 'Данные не пришли';

        }
    }

    function getComment(content) {
        const commentsList = document.querySelector('.comments__list');
        const commentItem = document.createElement('li');
        commentItem.classList.add('comments__item');

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
        commentItem.innerHTML = itemContent;
        commentsList.appendChild(commentItem);
    }


    btnSubmit.addEventListener('click',function () {
        xhr.open('POST', 'data.php');
        xhr.responseType = 'json';

        const formInput = [...document.querySelectorAll('[data-required]')];
        let isValid = formInput.every(item => validate(item));

       if (isValid) {
            xhr.send(new FormData(document.forms.formcomment))
        }


        event.preventDefault();  //чтобы страница не перезагружалась, return false не работало.
    })

        xhr.onload = function (){
            if(xhr.status !== 200) {
                setNotification(false);
            } else {
                setNotification(true);

                //getComment(xhr.response);
                console.log(xhr.response);
            }

            setTimeout(function (){
                hideModal();
            }, 300)
        }

        xhr.onerror = function (){
            alert('что-то пошло не так');
        }


});
