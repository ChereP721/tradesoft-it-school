document.addEventListener('DOMContentLoaded',function () {
    const btnAddComments = document.getElementById('add-comment');
    const modal = document.querySelector('.modal__form');
    const modalBtnClose = document.querySelector('.modal__btn-close');
    const btnSubmit = document.querySelector('.modal__btn');
    const notification = document.querySelector('.notification');
    const xhr = new XMLHttpRequest();

    initModal();

    function initModal() {
        if (btnAddComments) {
            btnAddComments.addEventListener('click', showModal);
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

    function validate(field) {
        field.classList.remove('validate_error');

        if (field.value === '') {
            field.classList.add('validate_error');
            return false;
        }
        return true;
    }

    function setNotification(isSuccess) {
        const noticeTitle = notification.querySelector('.notification__title'),
            noticeText = notification.querySelector('.notification__text');

        if(isSuccess) {
            noticeTitle.classList.add('success');
            noticeTitle.textContent = 'Успешно';
            noticeText.textContent = 'Успешно';
        }
        else {
            noticeTitle.classList.add('failed');
            noticeTitle.textContent = 'Ошибка';
            noticeText.textContent = 'Ошибка';
        }
    }

    btnSubmit.addEventListener('click', function() {
        xhr.open('POST', 'data.php');
        xhr.responseType = "json";

        const formInput = [...document.querySelectorAll('[data-required]')]
        let isValid = formInput.every(item => validation(item));

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
                hidemodal();
            }, 3000);
        }
    })
})