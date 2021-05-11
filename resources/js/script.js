import Axios from 'axios';

document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        const $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });
});

const add_car = document.querySelector('#add_car');
if (add_car) {
    add_car.addEventListener('click', function(e) {
        let target = add_car.getAttribute('data-path');
        Axios.get(target).then(responce => {
            document.querySelector('.modal-card-body').innerHTML = responce.data.view;
            document.querySelector('#modal-title').innerHTML = 'Add New Car';
            document.querySelector('#modal').classList.add('is-active');
        })
    })
}

const edits_car = document.querySelectorAll('.edit_car');
if (edits_car) {
    edits_car.forEach(edit_car => {
        edit_car.addEventListener('click', function(e) {
            let target = edit_car.getAttribute('data-path');
            Axios.get(target).then(responce => {
                document.querySelector('.modal-card-body').innerHTML = responce.data.view;
                document.querySelector('#modal-title').innerHTML = 'Edit Car';
                document.querySelector('#modal').classList.add('is-active');
            })
        })
    })
}

const close_btn = document.querySelector('#modalClose');
if (close_btn) {
    close_btn.addEventListener('click', function(e) {
        document.querySelector('#modal').classList.remove('is-active');
    });
}
