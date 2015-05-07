<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
 <footer> 
        <hr>   
        <div id="triangle"></div>  
        <div class="container">
          
            <div class="col-md-9 col-sm-12 col-xs-12 leftfoot">
              <div class="row" id="firstfooter">
               <span id="footer-title">友情链接</span>
              <span class="footer-contain">
                <span><a href="#">站酷网</a></span>
                <span><a href="#">W3SCHOOL</a></span>
                <span><a href="#">花瓣网</a></span>
                <span><a href="#">优秀网页设计</a></span>
                <span><a href="#">设计派</a></span>
              </span>              
              </div>
              <div class="row " id="secondfooter">
              <span id="footer-title2">Contact&nbsp;&nbsp;us</span>
              <span class="footer-contain2">
                <span><span class="glyphicon glyphicon-pushpin"></span>Address:&nbsp;&nbsp;&nbsp;广东工业大学大学城工学一号馆511</span>
                <span><span class="glyphicon glyphicon-envelope"></span>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cscwweb@163.com</span>
                <!-- <span class="glyphicon glyphicon-phone"></span>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（020）888888  -->
                <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>
              </span>             
              </div>              
            </div>
            <div class="col-md-3 hidden-sm  hidden-xs rightfoot">
              <div class="logo">
                cscw
              </div>
            </div>
          
        </div>
      </footer>
<script src="<?php $this->options->themeUrl('js/jquery-1.9.1.min.js'); ?>"></script>
    <script class="bootstrap" src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/lead.js'); ?>"></script>
    <script>console.log("%c协同前端博客欢迎你！"," text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9,0 5px 0 #aaa,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);font-size:4.5em;font-family:'微软雅黑';margin-bottom:-100px;");console.log('由于采用了无缓存机制，所以如果你想查看源代码的话请不要关闭开发者工具并刷新，否则会显示ERR_CACHE_MISS 错误！');</script>
<?php if($this->is('page')||$this->is('category')||$this->is('tag')||$this->is('archive')): ?>
<script>

  if($(".right").length!=0){

    // 解决14'屏幕的痛苦
    var rollSet = $('.affix');
    var flag = 0;
    var status = 0;
    var stopPointTop;
    if($('#blog-detail').length==0)
      stopPoint= $('footer').offset().top-$('#page-navibox').outerHeight()-$('.columnbox').height()-$('.columnbox').offset().top;
    else 
      stopPoint= $('footer').offset().top-$('.columnbox').height()-$('.columnbox').offset().top-40;
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (stopPoint < scrollTop) {flag =1;}else{flag=0;}
        if(flag==1&& status ==0){rollSet.addClass('stopaffix').css("top",stopPoint+"px");status =1;}
        else if (flag==0&&status==1){rollSet.removeClass('stopaffix').css("top","");status=0;}   
       
    })
    $(function(){
      // var reg = /(\D+)\/\d{0,3}/;
      // 获得总页数和当前页数
      var totalPage = 0 ;
      var currentPage = <?php  echo $this->_currentPage ;?>;
      var pagehead = "";
      if($('#navi-diy').html()!='')
        if($('#navi-diy .next a').length!=0)
          pagehead = ($('#navi-diy .next a').attr('href')).match(/(\D+\/)\d{0,3}/)[1];
          else pagehead =($('#navi-diy .prev a').attr('href')).match(/(\D+\/)\d{0,3}/)[1];
     
      
      if($('#navi-diy .prev').length==0)
        {
          // 这是第一页的时候
          totalPage = $("#navi-diy li:nth-last-child(2) a").html();
          $('#navi-next').attr("href",$('#navi-diy .next a').attr('href')); 
          $('#navi-pre').attr("href",pagehead+1);     
        }         
      else {
        totalPage = $("#navi-diy li:nth-last-child(2) a").html();
        if($('#navi-diy .next').length!=0){
          // 中间页的时候
          $('#navi-next').attr("href",$('#navi-diy .next a').attr('href')); 
          $('#navi-pre').attr("href",$('#navi-diy .prev a').attr('href')); 
        }
        else{
          totalPage = $("#navi-diy li:nth-last-child(1) a").html();
          // 最后一页的时候
          $('#navi-pre').attr("href",$('#navi-diy .prev a').attr('href')); 
          $('#navi-next').attr("href",pagehead+totalPage);
        }
      }
      if(totalPage>1)
      {
        
        $('#navi-nextest').attr("href",pagehead+totalPage);
        $('#navi-main').attr("href",pagehead+1);
      } 
      else 
        {
          $('#navi-nextest,#navi-pre,#navi-main').attr("href","#");
        }
      if($('#navi-diy').html()=='')
       {
          $('#navi-nextest,#navi-pre,#navi-main,#navi-next').attr("href","#");
          totalPage = 1;
       }    
      
      // 设置下拉框页数
      for (var i = 1; i <= totalPage; i++) {

        var topage = pagehead+i;
        $("#page-select").append('<option value='+topage+">第"+i+'页</option>');
      };    
      $("#page-select").val(pagehead+<?php  echo $this->_currentPage ;?>);
    });

  }
</script>
<?php endif; ?>
<?php $this->footer(); ?>
</body>
</html>
