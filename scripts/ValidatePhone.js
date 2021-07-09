let tel = document.getElementById('tel');
function ValidPhone(phone) {
    const regex = /(\d?)(\d{3})(\d{3})(\d{2})(\d{2})/g;
    const subst = "+7($2) $3-$4-$5";
    return phone.replace(regex, subst);
} 
tel.onchange = function () {
    tel.value = ValidPhone(tel.value);
};

create.onsubmit = function () {
    tel.value = ValidPhone(tel.value);
};