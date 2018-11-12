var navStatus = true;
function CloseNav() {
    document.getElementById("home-nav").style.left =
    "-350px";
    document.getElementById("acc-nav").style.left =
    "-350px";
    document.getElementById("sch-nav").style.left =
    "-350px";
    document.getElementById("res-nav").style.left =
    "-350px";
    document.getElementById("set-nav").style.left =
    "-350px";
}

function ShowHomNav() {
    if (navStatus == true) {
        document.getElementById("acc-nav").style.left =
        "-350px";
        document.getElementById("sch-nav").style.left =
        "-350px";
        document.getElementById("res-nav").style.left =
        "-350px";
        document.getElementById("set-nav").style.left =
        "-350px";
        document.getElementById("home-nav").style.left =
        "50px";
    }
    else if (navStatus == false) {
        document.getElementById("homw-nav").style.left =
        "-350px";
    }
}

function ShowAccNav() {
    if (navStatus == true) {
        document.getElementById("home-nav").style.left =
        "-350px";
        document.getElementById("sch-nav").style.left =
        "-350px";
        document.getElementById("res-nav").style.left =
        "-350px";
        document.getElementById("set-nav").style.left =
        "-350px";
        document.getElementById("acc-nav").style.left =
        "50px";
    }
    else if (navStatus == false) {
        document.getElementById("acc-nav").style.left =
        "-350px";
    }
}

function ShowSchNav() {
    if (navStatus == true) {
        document.getElementById("home-nav").style.left =
        "-350px";
        document.getElementById("acc-nav").style.left =
        "-350px";
        document.getElementById("res-nav").style.left =
        "-350px";
        document.getElementById("set-nav").style.left =
        "-350px";
        document.getElementById("sch-nav").style.left =
        "50px";
    }
    else if (navStatus == false) {
        document.getElementById("sch-nav").style.left =
        "-350px";
    }
}

function ShowResNav() {
    if (navStatus == true) {
        document.getElementById("home-nav").style.left =
        "-350px";
        document.getElementById("acc-nav").style.left =
        "-350px";
        document.getElementById("sch-nav").style.left =
        "-350px";
        document.getElementById("set-nav").style.left =
        "-350px";
        document.getElementById("res-nav").style.left =
        "50px";
    }
    else if (navStatus == false) {
        document.getElementById("res-nav").style.left =
        "-350px";
    }
}

function ShowSetNav() {
    if (navStatus == true) {
        document.getElementById("home-nav").style.left =
        "-350px";
        document.getElementById("acc-nav").style.left =
        "-350px";
        document.getElementById("sch-nav").style.left =
        "-350px";
        document.getElementById("res-nav").style.left =
        "-350px";
        document.getElementById("set-nav").style.left =
        "50px";
    }
    else if (navStatus == false) {
        document.getElementById("set-nav").style.left =
        "-350px";
    }
}