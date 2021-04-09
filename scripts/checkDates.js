let meetday = document.getElementById('meetday');
let datevacantion = document.getElementById('datevacantion');
let butt_c = document.querySelector('.position-r');
datevacantion.oninput = function () {
    if (datevacantion.value > meetday.value) {
        alert('Дата размещения вакансии не может позже даты собеседования');
        butt_c.classList.add('disable');
    } else {
        butt_c.classList.remove('disable');
    }
};