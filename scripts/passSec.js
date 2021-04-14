var form = document.querySelector('form');
var form = document.getElementById('box');
function checkPasswords(form) {
    var password = form.pass.value; // ����� ������ �� �����
    var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // ����� � ������ ��������
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // ����� � ������� ��������
    var digits = "0123456789"; // �����
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // �����������
    var is_s = false; // ���� �� � ������ ����� � ������ ��������
    var is_b = false; // ���� �� � ������ ����� � ������� ��������
    var is_d = false; // ���� �� � ������ �����
    var is_sp = false; // ���� �� � ������ �����������
    for (var i = 0; i < password.length; i++) {
        /* ��������� ������ ������ ������ �� �������������� � ���� ��� ����� ���� */
        if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
        else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
        else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
        else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    var rating = 0;
    var text = "";
    if (is_s) rating++; // ���� � ������ ���� ������� � ������ ��������, �� ����������� ������� ���������
    if (is_b) rating++; // ���� � ������ ���� ������� � ������� ��������, �� ����������� ������� ���������
    if (is_d) rating++; // ���� � ������ ���� �����, �� ����������� ������� ���������
    if (is_sp) rating++; // ���� � ������ ���� �����������, �� ����������� ������� ���������
    /* ����� ��� ������ ����� ������ � ����������� ��������, � �� ��������� ����� ��������� ��������� �������� ��������� ������ */
    if (password.length < 6 && rating < 3) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    else if (password.length < 6 && rating >= 3) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 8 && rating < 3) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 8 && rating >= 3) { box.classList.add('strong-pass'); box.classList.remove('easy-pass'); box.classList.remove('medium-pass');}
    else if (password.length >= 6 && rating == 1) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 6 && rating > 1 && rating < 4) { box.classList.add('medium-pass'); box.classList.remove('easy-pass'); box.classList.remove('strong-pass');}
    else if (password.length >= 6 && rating == 4) { box.classList.add('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    if (password.length == 0) { box.classList.remove('easy-pass'); box.classList.remove('madium-pass'); box.classList.remove('strong-pass');}
    return false; // ����� �� ����������
}