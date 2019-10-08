

$(document).ready(function(){
	
	$(window).scroll(function(){
		
		var element=document.getElementById("nav");
        if ($(this).scrollTop() > 210) {
            element.style.top="0";
        } else {
            element.style.top="210px";
        }
    });
	
	});