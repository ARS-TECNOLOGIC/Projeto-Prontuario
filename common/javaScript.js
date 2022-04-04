
function alt(classMudar) {

    var valID = document.getElementById(classMudar + "Sub").className;
    if (valID == 'submenu-show') {
        document.getElementById(classMudar + "Sub").className = 'submenu-hidden';
        document.getElementById(classMudar+"Drop").style.transform='rotate(0deg)';
    } else {
        document.getElementById(classMudar + "Sub").className = 'submenu-show';
        document.getElementById(classMudar+"Drop").style.transform='rotate(180deg)';
    
    }

};


