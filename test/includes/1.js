window.onload = function init1(){
initAll();
  var rangImg=new Array()

            rangImg[1]="images/head1.jpg"
            rangImg[2]="images/head2.jpg"
            rangImg[3]="images/head3.jpg"


            var rn=Math.floor(Math.random()*rangImg.length)

            if (rn==0){rn=1}
            document.getElementById("headImage").src = rangImg[rn];
			
			document.getElementById("name").onsubmit = setCookie;
        }




function setCookie(){
	var expireDate = new Date();
	expireDate.setMonth(expireDate.getMonth() + 6);
	
	var userName = document.getElementById("userName").value;
	document.cookie = "userName=" + userName + ";path=/;expires=" + expireDate.toGMTString();	
}