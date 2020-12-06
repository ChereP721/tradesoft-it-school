document.addEventListener('DOMContentLoaded', function(){

    const countComments = document.getElementById('count_comment');
    const detailsComment = document.getElementById('det_comments');
    const btnAddComment = document.getElementById('add-comment');
    const modal = document.querySelector('.modal');
    const shadow = document.querySelector('.shadow');
    const btnClose = document.querySelector('.modal__btn-close');
    const btnSubm = document.querySelector('.button_send');
    const loader = document.querySelector('.loader__wrapper');
    const notification = document.querySelector('.notification');

    const xhr = new XMLHttpRequest();

    if (countComments.innerText == 0){
        detailsComment.classList.add('details_hidden');
    }

    if (btnAddComment){
        btnAddComment.addEventListener('click', () => {
            showModal();
        })
    }

    if (shadow){
        shadow.addEventListener('click', () => {
            hideModal();
        })
    }

    if (btnClose){
        btnClose.addEventListener('click', () => {
            hideModal();
        })
    }

    function showModal () {
        modal.classList.add('modal_show');
        if (shadow) {
            shadow.classList.add('shadow_active');
        }
    }

    function hideModal () {
        modal.classList.remove('modal_show');
        if (shadow) {
            shadow.classList.remove('shadow_active');
        }
    }

    function validate (field) {
        field.classList.remove('validate-error');
        if (field.value ==='') {
            field.classList.add('validate-error');
            return false;
        }
        field.classList.add('validate-ready');
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

    function getComment(content) {
        const commentsList = document.querySelector('.comments_wrap');
        const commetnItem = document.createElement('div');
        commetnItem.classList.add('comment');

        const itemContent = `        
        <div class="comment" id="comment1">
        <div class="section__comments">
            <p class="section__comments__author">
                <i class="fas fa-user-circle" aria-hidden="true"></i> <a href="/" class="section__article__author__link"> ${content.name} </a> прокомментировал
                <time datetime="${content.time}">${content.time}</time>
                id - <?=$post['id'];?> parent - <?=$post['parent_id'];?>
            </p>
            <p class="section__comments__text">
                ${content.comment}
            </p>
        </div>
        </div>`;

        commetnItem.innerHTML = itemContent;
        commentsList.appendChild(commetnItem);
    }

    if (btnSubm) {
        btnSubm.addEventListener('click', ()=>{
            xhr.open('POST','/core/adddata.php');
            xhr.responseType = 'json';
            const formInp = [...document.querySelectorAll('[data-required]')];
            let isValid = formInp.every(item => validate(item));

            if (isValid) {
                xhr.send(new FormData(document.forms.comment_add));
                loader.classList.add('loader__wrapper_show');
            }
        });

        xhr.onload = function(){
            if (xhr.status !== 200) {
                loader.classlist.remove('loader__wrapper_show');
            }
        }
    }


    xhr.onload = function() {
        if (xhr.status !== 200) {
            loader.classList.remove('loader__wrapper_show');
            setNotification(false);
            notification.classList.add('notification__show');
        } else {
            loader.classList.remove('loader__wrapper_show');
            setNotification(true);
            notification.classList.add('notification__show');

            getComment(xhr.response);
        }

        setTimeout(function() {
            hideModal();
            notification.classList.remove('notification__show');
        }, 5000);
    }

    xhr.onerror = function() {
        alert('request failed')
    }
})