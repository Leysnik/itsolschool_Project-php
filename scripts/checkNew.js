let butt = document.getElementById('next');
let h1 = document.getElementById('main');
let span = document.getElementById('create');


butt.onclick = function () {
    span.classList.toggle('disable');
    butt.classList.toggle('disable');
    h1.textContent = 'Проверьте правильность заполненных данных';
    h1.classList.toggle('red');
};