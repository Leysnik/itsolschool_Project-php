var form = document.querySelector('form');
var form = document.getElementById('box');
function checkPasswords(form) {
    var password = form.pass.value; // Берем пароль из формы
    var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
    var digits = "0123456789"; // Цифры
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
    var is_s = false; // Есть ли в пароле буквы в нижнем регистре
    var is_b = false; // Есть ли в пароле буквы в верхнем регистре
    var is_d = false; // Есть ли в пароле цифры
    var is_sp = false; // Есть ли в пароле спецсимволы
    for (var i = 0; i < password.length; i++) {
        /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
        if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
        else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
        else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
        else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    var rating = 0;
    var text = "";
    if (is_s) rating++; // Если в пароле есть символы в нижнем регистре, то увеличиваем рейтинг сложности
    if (is_b) rating++; // Если в пароле есть символы в верхнем регистре, то увеличиваем рейтинг сложности
    if (is_d) rating++; // Если в пароле есть цифры, то увеличиваем рейтинг сложности
    if (is_sp) rating++; // Если в пароле есть спецсимволы, то увеличиваем рейтинг сложности
    /* Далее идёт анализ длины пароля и полученного рейтинга, и на основании этого готовится текстовое описание сложности пароля */
    if (password.length < 6 && rating < 3) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    else if (password.length < 6 && rating >= 3) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 8 && rating < 3) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 8 && rating >= 3) { box.classList.add('strong-pass'); box.classList.remove('easy-pass'); box.classList.remove('medium-pass');}
    else if (password.length >= 6 && rating == 1) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 6 && rating > 1 && rating < 4) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 6 && rating == 4) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    if (password.length == 0) { box.classList.remove('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    return false; // Форму не отправляем
}