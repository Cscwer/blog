var key = 1;
var lock = 0;
click=0;
$('.menu').click(function() {
  if(key == 0) {
    $('ul.secondlead').css('right', '16.8%');
     $('ul.lead').css('right', '16.5%');
    // $('ul.lead').css('color', 'rgba(250, 250, 250, 1)');
    $('div.mainleaderbox').css('background-color', 'rgba(182,178,212, 0.7)');
    $('div.blogleaderbox').css('background-color', 'rgba(39,39,39, 1)');
    $('.colorful-border1,.colorful-border2,.colorful-border3,.colorful-border4').removeClass('hidden');
    $('#leader-title').addClass('hidden');
    key = 1;
  }
  else
  if(key == 1) {
    $('ul.lead,ul.secondlead').css('right', '-100%');
    // $('ul.lead').css('color', 'rgba(250, 250, 250, 0)');
   $('div.mainleaderbox,div.blogleaderbox').css('background-color', 'rgba(0, 0, 0, 0)');
   $('.colorful-border1,.colorful-border2,.colorful-border3,.colorful-border4').addClass('hidden');
   $('#leader-title').removeClass('hidden');
    key = 0;
  }
}
);
$('.menu').click(function() {
  if(lock == 0) {
    $('img.menu').addClass("transform ");
    lock = 1;
  }
  else
  if(lock == 1) {
    $('img.menu').removeClass("transform ");
    lock = 0;
  }
}
);
$('#leader').mouseover(function() {
  // $('div#leader').css('background-color', 'rgba(216,207,226, 0.5)');
}
);
$('#leader').mouseout(function() {
  // $('div#leader').css('background-color', 'rgba(216,207,226, 0.5)');
}
);

// 按钮操作
