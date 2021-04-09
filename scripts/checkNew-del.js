let fake = document.querySelectorAll(".grey");
let del = document.querySelectorAll(".butt-del");
let still = document.querySelectorAll(".butt-table-3");

function CreateRequest() {
    var Request = false;

    if (window.XMLHttpRequest) {
        //Gecko-совместимые браузеры, Safari, Konqueror
        Request = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        //Internet explorer
        try {
            Request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (CatchException) {
            Request = new ActiveXObject("Msxml2.XMLHTTP");
        }
    }

    if (!Request) {
        alert("Невозможно создать XMLHttpRequest");
    }

    return Request;
} 

for (let i = 0, length = fake.length; i < length; i++) {
    fake[i].onclick = function () {
        fake[i].classList.toggle('disabled');
        del[i].classList.toggle('disabled');
        still[i].classList.toggle('disabled');
        alert('Вы уверены в удалении записи? Следующие нажатие удалит резюме. Для отмены нажмите на кнопку "Скрыть"');
    };
}
for (let i = 0, length = still.length; i < length; i++) {
    still[i].onclick = function () {
        fake[i].classList.toggle('disabled');
        del[i].classList.toggle('disabled');
        still[i].classList.toggle('disabled');
    };
}
for (let i = 0, length = del.length; i < length; i++) {
    del[i].onclick = function () {
        Request = new CreateRequest();
        const url = "../pages/delete.php";
        const params = "id=" + del[i].getAttribute('idb');
        Request.open("POST", url, true);
        Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
        Request.send(params);
        Request.addEventListener("readystatechange", () => {
            if (Request.status == 200 & Request.readyState == 4) {
                let properties = document.getElementById(del[i].getAttribute('idb'));
                properties.remove();
                alert('запись удалена');

            }
        });

    };
}