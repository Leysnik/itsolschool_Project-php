let email = document.getElementById('email');
let tel = document.getElementById('tel');
let vk = document.getElementById('vk');
let instagram = document.getElementById('instagram');
let social = document.getElementById('social');

let email_d = document.getElementById('email-d');
let tel_d = document.getElementById('tel-d');
let vk_d = document.getElementById('vk-d');
let instagram_d = document.getElementById('instagram-d');
let social_d = document.getElementById('social-d');

function CreateRequest()
{
    var Request = false;

    if (window.XMLHttpRequest)
    {
        //Gecko-совместимые браузеры, Safari, Konqueror
        Request = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        //Internet explorer
        try
        {
             Request = new ActiveXObject("Microsoft.XMLHTTP");
        }    
        catch (CatchException)
        {
             Request = new ActiveXObject("Msxml2.XMLHTTP");
        }
    }
 
    if (!Request)
    {
        alert("Невозможно создать XMLHttpRequest");
    }
    
    return Request;
} 

email.oninput = function () {
    Request = new CreateRequest();
    const url = "../php-validate/checkPrimary.php";
    const params = "email=" + email.value;
    Request.open("POST", url, true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    Request.send(params);
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {
            
            if (Request.responseText == '1') { email_d.classList.remove("disable"); } else { email_d.classList.add("disable");  }           
        }
    });
};


tel.oninput = function () {
    Request = new CreateRequest();
    const url = "../php-validate/checkPrimary.php";
    const params = "tel=" + tel.value;
    Request.open("POST", url, true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    Request.send(params);
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {

            if (Request.responseText == '1') { tel_d.classList.remove("disable"); } else { tel_d.classList.add("disable"); }
        }
    });
};

vk.oninput = function () {
    Request = new CreateRequest();
    const url = "../php-validate/checkPrimary.php";
    const params = "vk=" + vk.value;
    Request.open("POST", url, true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    Request.send(params);
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {

            if (Request.responseText == '1') { vk_d.classList.remove("disable"); } else { vk_d.classList.add("disable"); }
        }
    });
};

instagram.oninput = function () {
    Request = new CreateRequest();
    const url = "../php-validate/checkPrimary.php";
    const params = "instagram=" + instagram.value;
    Request.open("POST", url, true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    Request.send(params);
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {

            if (Request.responseText == '1') { instagram_d.classList.remove("disable"); } else { instagram_d.classList.add("disable"); }
        }
    });
};

social.oninput = function () {
    Request = new CreateRequest();
    const url = "../php-validate/checkPrimary.php";
    const params = "social=" + social.value;
    Request.open("POST", url, true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    Request.send(params);
    Request.addEventListener("readystatechange", () => {
        if (Request.status == 200 & Request.readyState == 4) {

            if (Request.responseText == '1') { social_d.classList.remove("disable"); } else { social_d.classList.add("disable"); }
        }
    });
};