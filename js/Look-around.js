// @Look-around V1.0
// @四周看看 V1.0
// @Author : Chuck
// @作者	：成博
// @Bace on LATERAL's about team
// @参考 LATERAL 的关于团队 制作 ，解决 jquery hover 与 click 冲突方面完全引用该代码。
// @计算图形变化则为独立算法
// @div请以 ul>li>div.Look-around 的结构存在
// @V2.0 将会更新绑定按键的功能
$(document).ready(function(){
  var One = $(".Look-around");
  old_x = 0;
  old_y = 0;
  One_height = One.height();
  One_width = One.width();
  XYtoPolar = function  (X,Y)
  // 直角坐标转换极坐标（距离绝对值，角度）
  	{
  		p = parseInt(Math.sqrt(X*X+Y*Y));
  		temp = Math.atan2(Y,X)*57.2957;
      //这里将弧度乘以 57.2957 转换为角度
  		Y= Y>0 ? (Xita = temp) : (Xita = 360-Math.atan2(-Y,X)*57.2957);
      //由于角度变化是从 0~180 ，再由 180~0 这样变化的 。
      //所以利用判断可以实现由 0~360 的变化从而便于分配图像 
  		Xita = parseInt(Xita);
  		direction = parseInt((Xita)/45);
      //除以45度，分为8个区
  	}
  changeOne = function  (someone,direction)
  // 改变某个人的头像
  	{
  		tempstr = -(direction*One_height)+"px "+(-someone.parent("li").index())*One_height+"px"		
      //如果公式过长，会触发不知名错误，所以要采用字符串中转处理
  		someone.css("background-position",tempstr);
  	}
  changeAll = function (direction)
  //改变每个人的头像
      {

          $('.Look-around').each(function() {
              changeOne($(this), direction);
              //遍历每一个人
          });
          return false
      }
  mouseevent = function (e) 
  //鼠标移动触发的事件
   {                             
       	 r_x = e.pageX - old_x;
         r_y = e.pageY - old_y;
         dist = Math.sqrt(r_x * r_x + r_y * r_y);
         //通过限制移动事件触发的频率来解决 click 和 moseover 冲突的问题
         if (dist > 50)
          {
              old_x = e.pageX;
              old_y = e.pageY;   
              One.each(function(){          
                  var aX = $(this).offset().left + parseInt($(this).width()/2);
      			      var aY = $(this).offset().top  + parseInt($(this).height()/2);
                  //计算元素中心直角坐标，必须在这里再计算，否则会导致不能绑定每一个人
      			      XYtoPolar(e.pageX -aX,-(e.pageY-aY));	
              	  if (p>60 && p<=800)
                    //当超出一定距离后，人恢复常态，不再左顾右盼
                    changeOne($(this),direction);          
  			          else 
  				          if(p>800)
  				            changeOne($(this),8); 
                })
              
  		    }		
  		 		
   }
  changeAll(8);
  //人物状态初始化
  One.hover(function(){
    //鼠标hover状态的人物头像改变
  	changeOne($(this),9);
  });
  One.click(function(){
    //点击时，其他人低下头，做沮丧壮，被点击人开心状
  	changeAll(6);
  	changeOne($(this),10);
  });
  $(document).mousemove(mouseevent);
  //绑定鼠标移动事件

});


