let fake = document.getElementById('fake-delete');
let del  = document.getElementById('delete');
let still = document.getElementById('still-delete');

fake.onclick = function () {
    fake.classList.toggle('disabled');
    del.classList.toggle('disabled');
    still.classList.toggle('disabled');
    alert('Вы уверены в удалении записи? Следующие нажатие удалить резюме. Для отмены нажмите на кнопку "Скрыть"');
};
still.onclick = function () {
    fake.classList.toggle('disabled');
    del.classList.toggle('disabled');
    still.classList.toggle('disabled');
};