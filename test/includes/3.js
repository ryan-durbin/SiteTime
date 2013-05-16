window.onload = function init3() {
	initAll();
	//quiz
document.getElementById("bear").onsubmit = quiz;

var currentTime = new Date();
var month = currentTime.getMonth() + 1;
var day = currentTime.getDate();
var year = currentTime.getFullYear();

var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
if (minutes < 10){
minutes = "0" + minutes;
}
document.getElementById("date").innerHTML = (month + "/" + day + "/" + year + " " + hours + ":" + minutes);
document.getElementById("date").style.color = "red";
document.getElementById("date").style.fontSize = "80px";

}

function quiz() {

	document.getElementById("doBear").style.display = "block";
	return false;

}