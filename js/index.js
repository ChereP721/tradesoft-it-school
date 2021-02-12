document.addEventListener('DOMContentLoaded',function () {
    const btnAddComment = document.getElementById('add-comment');
    const modal = document.querySelector('.modal__form');
    const modalBtnClose = document.querySelector('.modal__btn-close');
    const btnSubmit = document.querySelector('.modal__btn');
    const notification = document.querySelector('.notification');
    const xhr = new XMLHttpRequest();

    initModal();

    function initModal() {
        if (btnAddComment ) {
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

    btnSubmit.addEventListener('click', function() {
        xhr.open('POST', 'data.php');
        xhr.responseType = "json";

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
            }

            setTimeout(function() {
                hideModal();
            }, 3000);
        }
    })
})