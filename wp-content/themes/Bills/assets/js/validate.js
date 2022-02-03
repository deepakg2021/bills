/* 
 *  author Dotsquares
 
 */

function allownumbers(e) {
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    var reg = new RegExp("[0-9.,]")

    if (key == 8 || key == 0) {
        keychar = 8;
    }

    return reg.test(keychar);
}
function allowchar(e) {
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    var reg = new RegExp("[A-Za-z,-/]")

    if (key == 8 || key == 0 || key == 32) {
        keychar = "a";
    }


    return reg.test(keychar);
}
function validAddress(e) {
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    var reg = new RegExp("[A-Za-z,-/&0-9]")

    if (key == 8 || key == 0 || key == 32) {
        keychar = "a";
    }


    return reg.test(keychar);
}
function validpolicyno(e) {
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    var reg = new RegExp("[/0-9]")

    if (key == 8 || key == 0) {
        keychar = 8;
    }

    return reg.test(keychar);
}
function disableBtn(btnID, newText) {

    var btn = document.getElementById(btnID);
    setTimeout("setImage('" + btnID + "')", 10);
    btn.disabled = true;
    btn.value = newText;
}
function setImage(btnID) {
    var btn = document.getElementById(btnID);
    btn.style.background = 'url(12501270608.gif)';
}
function validateddl(ddlList)
{
   if(document.getElementById("ddlList").value == "")
   {
      alert("Please select value"); // prompt user
      document.getElementById("ddlList").focus(); //set focus back to control
      return false;
   }
}
