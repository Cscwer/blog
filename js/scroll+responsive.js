
$(document).ready(function(){
    
    var initPage = function(){
        
        // $("#head").css("height",(wHight-$(".blogleaderbox").height()+)+'px');
        // $("div[id^='column']").css("height",wHight+'px');
        $("div[id^='column'],#head").css("height",wHight+'px');

        $("div.peoplebox").css("paddingTop",(wHight/2-$(".peopleul").height()/2)+'px').css("paddingLeft",(wWidth/2-$(".peopleul").width()/2)+'px');
        // console.log((wHight/2-$(".peopleul").height()/2)+'px');
    }
    var scrollTo = function(obj){
        $("html,body").animate({scrollTop:$("#"+obj).offset().top},1000);
    }
    var moveNaviSign = function(){
        $(".circle,.circle1,.circle2").removeClass("page-now");
    }
    var checkScroll = function(){
        if(!$("html,body").is(':animated'))
            {
            var topNow=$(window).scrollTop();
            var page=parseInt(topNow/(wHight) );
            
            if(topNow==0){topBefore=0;};
            var maxlength = wHight>wWidth? wWidth :wHight;
            //导航栏文字变化
            if(page == 2&&!$("html,body").is(':animated')) {$("#leader-title").html("ABOUT");}
                else if(page == 1){$("#leader-title").html("WORKS");if(key&&!click){key=1;$(".menu").click();}}
                    else {$("#leader-title").html("HOME");if(!key){key=0;$(".menu").click();}}
                    //导航栏英文颜色变化结束
            //左边导航栏颜色变化开始
            if(page == 2) {
                
                moveNaviSign();
                $(".circle2").addClass("page-now");
                $(".leftnavi").fadeIn("slow");}
                else if(page == 1){moveNaviSign();
                    
                    $(".circle1").addClass("page-now");
                    $(".leftnavi").fadeIn("slow");}
                    else {moveNaviSign();
                        $(".circle").addClass("page-now");
                        $(".leftnavi").fadeOut();}
            //左边导航栏颜色变化结束 

            // 按钮平滑跳转开始

            if(topNow>topBefore&&topNow-topBefore<maxlength){page++;};
            var topage = "column" + (page);
            if(topNow>topBefore||topNow<topBefore) { if (topNow<topBefore&&topNow<wHight){ topage="head"; };scrollTo(topage); topBefore=$("#"+topage).offset().top;return false; };
            
            
    }}
    //初始化隐藏左边导航栏
    $(".leftnavi").fadeOut(0);
    // 获取浏览器可视区域宽高
    var wHight =$(window).height();
    var wWidth =$(window).width();
    var topBefore=0;
    initPage();
    // 当窗口变化时重新调整部分页面的配置
	$(window).resize(function() {
        wHight = $(window).height();
        wWidth =$(window).width();
        initPage();
       //自适应编写预留
        if(wHight*1.02>wWidth*0.85-134){}
        if(wHight*1.02>wWidth-134){}
    	if(wWidth<=1115){}
    });
     $(".circle").click(function(){scrollTo("head");moveNaviSign();$(this).addClass("page-now");$(".leftnavi").fadeOut();$("ul.secondlead").css("color","rgb(184,68,47)");});
    $(".circle1").click(function(){scrollTo("column1");moveNaviSign();$(this).addClass("page-now");$("ul.secondlead").css("color","rgb(23,200,201)");});
    $(".circle2").click(function(){scrollTo("column2");moveNaviSign();$(this).addClass("page-now");$("ul.secondlead").css("color","rgb(56,160,97)");});
//整屏翻页,支持使用右边的滚动条翻页！
	$(window).scroll(function(){ checkScroll(); });

    $("#button").click(function(){scrollTo("column1")});
    
    });


