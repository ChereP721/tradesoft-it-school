document.addEventListener('DOMContentLoaded', function() {
 const btnAddComment = document.getElementById('add-comment');
 const modal = document.querySelector('.modal');
 const modalBtnClose = document.querySelector('.modal__btn-close');
 const modalBtnSubmit = document.querySelector('.modal__btn-submit');
 const notification = document.querySelector('.modal__notification');
 //const btnAddComment = document.getElementById('');
 //const btnAddComment = document.getElementById('');
 const xhr = new XMLHttpRequest();

    initModal();
    
    function initModal() {
        if (btnAddComment) {
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

    function validate(field) {
        modal.classList.remove('validate-error');
        if (field.value === "") {
            modal.classList.add('validate-error');
            return false;
        }
        return true;
    }
 

    function setNotification(isSuccessful) {
        const noticeTitle = notification.querySelector('.notification__title'),
            noticeText = notification.querySelector('.notification__text');
        if (isSuccessful) {
            noticeTitle.classList.add('success');
            noticeTitle.textContent= 'Успешно';
            noticeText.textContent= 'принято';
        } else {
            noticeTitle.classList.add('error');
            noticeTitle.textContent= 'Беда';
            noticeText.textContent= 'не принято';
        }
    }

    modalBtnSubmit.addEventListener('click', function() {
        xhr.open('POST', 'index.php');
        xhr.responseType = 'json';
        const formInput = [...document.querySelectorAll('[data-required]')];
        let isValid = formInput.every(itrem => validate(item));
    
        if (isValid) {
             xhr.send(new FormData(document.forms.comment));
        } 
        xhr.send(new FormData(document.forms.comment));
         });
    
        xhr.onload = function() {
            if (xhr.status !==200) {
                setNotification(false);
            } else {
                setNotification(true);
            }
                
            setTimeout(function() {
                hideModal();
            },3000);
        }

        xhr.onerror = function() {
            alert('фигня какая-то случилась');
        }
})