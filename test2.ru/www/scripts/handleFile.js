let input = document.querySelectorAll('.send-field_prof');
let img = document.querySelectorAll('.d-img');
console.log(input);
console.log(img);


function Filevalidation() {
    for (var i = 0; i < 2; i++) {
        if (input[i].files.length > 0) {
            img[i].classList.remove('disable');
        }
    }
}
