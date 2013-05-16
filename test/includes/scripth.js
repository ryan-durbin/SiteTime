//Programmers: Heather Giamona, John Nydell, Eva Goins

window.onload = initAll;

function initAll() {
	//Image links to display
	var banArray = new Array;
	banArray[0] = 'images/banner1.jpg';
	banArray[1] = 'images/banner2.jpg';
	banArray[2] = 'images/banner3.jpg';
	  
	var randomNum = Math.floor ((Math.random() * banArray.length));
	document.getElementById("banner").src = banArray[randomNum];

	//Popup code called	 
	init();

	//Cookie form and greeting saved		
	cookieName();

	//Time and date stamp		
	document.getElementById("timeDateStamp").innerHTML = document.lastModified;
}

//Read the cookie value and determines the returned greeting
function cookieName(){
	var userName = "";

	if (document.cookie != "") {
		userName = document.cookie.split("=")[1];
	}
	
	document.getElementById("cookieName").value = userName;
	document.getElementById("cookieName").onblur = readCookie;
	
	if (document.cookie != "") {		
		document.getElementById("cookieName2").innerHTML = "Greetings, " + document.cookie.split("=")[1] + "! Please enjoy the site's beauties.";
	}
	else {
		document.getElementById("cookieName2").innerHTML = "Greetings! Please enjoy the site's beauties.";
	}
}

//Read the cookie value and sets the expiration 
function readCookie(){
	var expireDate = new Date();
	expireDate.setMonth(expireDate.getMonth() + 6);

	var userName = document.getElementById("cookieName").value;
	document.cookie = "userName=" + userName + ";path=/;expires=" + expireDate.toGMTString();	
}