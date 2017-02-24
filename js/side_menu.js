
//function openNav() {
//    document.getElementById("mySidenav").style.width = "200px";
//}
//
//function closeNav() {
//    document.getElementById("mySidenav").style.width = "0";
//}


$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
                
	});
        $('.sidenav_btn').click(function (){
          $('.sidenav').toggleClass('show')  
        })});
function myFunction(x) {
    x.classList.toggle("change");
}

