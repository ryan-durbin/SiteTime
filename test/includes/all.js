function initAll() {

    var allLinks = document.getElementsByTagName("a");

    for (var i=0; i<allLinks.length; i++) {
        if (allLinks[i].className.indexOf("menuLink") > -1) {
closeMenu(allLinks[i]);
            allLinks[i].onmouseover = toggleMenu;
            allLinks[i].onclick = menuClick;

        }
    }
	
	var user = "";
    if (document.cookie != "") {
        user = document.cookie.split("=")[1];
        document.getElementById("greeting").innerHTML = "Welcome, " + user ;
    }
    else {
        document.getElementById("greeting").innerHTML = "Welcome, Visitor!";
    }
	
}
function toggleMenu() {
    var startMenu = this.href.lastIndexOf("/")+1;
    var stopMenu = this.href.lastIndexOf(".");
    var thisMenuName = this.href.substring(startMenu,stopMenu);

    document.getElementById(thisMenuName).style.display = "block";

    this.parentNode.className = thisMenuName;
    this.parentNode.onmouseout = shutMenu;
    this.parentNode.onmouseover = openMenu;
}

function openMenu() {
    document.getElementById(this.className).style.display = "block";
}

function shutMenu() {
    document.getElementById(this.className).style.display = "none";
}



function menuClick()

{

    return false;

}

function closeMenu(menu)
{
    var startMenu = menu.href.lastIndexOf("/")+1;
    var stopMenu = menu.href.lastIndexOf(".");
    var thisMenuName = menu.href.substring(startMenu,stopMenu);

    var thisMenu = document.getElementById(thisMenuName).style;

  thisMenu.display = "none";

}