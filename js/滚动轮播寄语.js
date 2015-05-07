
$(document).ready(function(){
	var speed = 3000;
	var colheight = 66;
	var floor = 4;
	var nowfloor = 0;
	var str;
	var scroll = $(".scrollbox");
	setInterval(function(){
		if(!scroll.is(':animated')) 
		{
		 str = '-'+colheight*nowfloor+'px';
		 if(nowfloor >= floor){scroll.animate({marginTop:'-'+(nowfloor)*colheight+"px"},1000);scroll.animate({marginTop:"0px"},0);nowfloor=0;}else{nowfloor++;scroll.animate({marginTop:str},1000);};
		
		}
	},speed);
});