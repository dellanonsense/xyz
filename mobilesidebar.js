function openNav() {
document.getElementById("closebtn").style.display = "grid";
document.getElementById("sidebar").style.width = "120px";
document.getElementById("sidebar").style.display = "block";
document.getElementById("sidebar").style.position = "absolute";
document.getElementById("overlay").style.width = "100%";
document.getElementById("overlay").style.display = "block";
document.getElementById("overlay").style.position = "absolute";
}

function closeNav() {
document.getElementById("sidebar").style.width = "0px";
document.getElementById("sidebar").style.display = "none";
document.getElementById("closebtn").style.display = "none";
document.getElementById("overlay").style.width = "0%";

}