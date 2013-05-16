//Programmer(s): Heather Giamona, John Nydell, Eva Goins
//This script is for the pop-up menu

function init() {
	//Get links by tag name
	 var popLinks = document.getElementsByTagName("a");
	
	//Sets mouse events
	for (var i = 0; i < popLinks.length; i++) {
		if (popLinks[i].className.indexOf("popMenu") > -1) {
			popLinks[i].onclick = returnFalse;
			popLinks[i].onmouseover = popupMenu;
		}
	}		 
 }

//Pop up menu function: changes the display of the pop-up menu based on event
function popupMenu() {
	var startMenu = this.href.lastIndexOf("/") + 1;
	var stopMenu = this.href.lastIndexOf(".");
	var popmenuName = this.href.substring(startMenu,stopMenu);

	document.getElementById(popmenuName).style.display = "block";

	this.parentNode.saveId = popmenuName;
	this.parentNode.onmouseout = displayOff;
	this.parentNode.onmouseover = displayOn;	
}

//Mouse-over event
function displayOn() {
	document.getElementById(this.saveId).style.display = "block";
}

//Mouse-out event
function displayOff() {
	document.getElementById(this.saveId).style.display = "none";
}

//On-click event
function returnFalse() {
	return false;
}