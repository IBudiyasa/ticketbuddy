var backbtn = document.getElementById(back);
var inp = document.getElementsByClassName("input");
function back(){
    inp.removeAttribute("required");
    backbtn.onclick(location.href="index.php");
}