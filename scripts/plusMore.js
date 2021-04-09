let update = document.querySelector(".more-butt");
let table = document.querySelector("table");
let all = document.querySelector(".all");

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

update.onclick = function () {
    Request = new CreateRequest();
    const params = all.textContent + "&i=" + update.getAttribute('i_num') + "&j=" + update.getAttribute('j_num');
    const url = "../php-validate/find.php?" + params;   
    Request.open("GET", url);
    Request.setRequestHeader("Content-type", "application/x-www-form-url");
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {
            table.appendChild(Request.responseText);
            console.log('1');
        }
    });

};