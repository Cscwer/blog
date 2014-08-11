var key = 1;
var lock = 0;
$('#leader').click(function() {
  if(key == 0) {
    $('ul.lead').css('right', '80px');
    $('ul.lead').css('color', 'rgba(250, 120, 20, 1)');
    //$('div.container').css('background-color', 'rgba(0, 0, 0, 0.2)');
    key = 1;
  }
  else
  if(key == 1) {
    $('ul.lead').css('right', '-450px');
    $('ul.lead').css('color', 'rgba(250, 120, 20, 0)');
   // $('div.container').css('background-color', 'rgba(0, 0, 0, 0)');
    key = 0;
  }
}
);
$('#leader').click(function() {
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
  $('div#leader').css('background-color', '#EED4DF');
}
);
$('#leader').mouseout(function() {
  $('div#leader').css('background-color', '#EED4DF');
}
);
$("header").data("headroom").destroy();
// 按钮操作
