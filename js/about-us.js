// 以下为动态头像冒泡

$(document).ready(function(){ 
  var a = 500;
  var b = 450;
  var c = 50;
  var yes = 0;
  var effectHeight =$(".KindsOfPeople").offset().top - $(document).height();
  $(".designerico span,.coderico span").fadeOut();

  $(window).scroll(function(){
    console.log($(this).scrollTop());
    if ($(this).scrollTop() > effectHeight && !yes )
     {
       $(".designerico span").each(function(){
       $(this).show(a)
       a += 500 ;
       });
       $(".coderico span").each(function(){
       $(this).show(b);
       b += 450 ;
       b -= c;
       c += 60;
       });
     }   
    });
  });