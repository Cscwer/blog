<?php
/**
 * 这是 协同前端的一套皮肤
 * 
 * @package CSCW Front-end Web's blog  
 * @author Chuck && Dtree
 * @version 0.1
 * @link 
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php  $this->need('sidebar.php'); ?>
<div class="col-md-9  right">
  <?php while($this->next()): ?>
  <?php if (($this->sequence == 1)): ?>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="big-article-box" >
              <img src="<?php @Thumbnail_Plugin::show($this); ?>" alt="" class = "big-article-bgimg">
              <div class="big-article-information-box">
                <div class="article-type-<?php   echo ($this->categories[0]['directory'][0]); ?>"></div>
                <div class="big-article-time"><?php $this->date('Y/m/d'); ?></div>
                <div class="big-article-title"> <a href="<?php $this->permalink() ?>"> <?php $this->title() ?> </a>   </div>
                <div class="big-article-author-headico"><?php GravatarCache::getGravatar($size = 32, $rating = 'G', $default = 'mm',$this->author); ?></div>
                <div class="big-article-author"><?php $this->author(); ?></div>
                <div class="big-comment-ico"></div>
                <div class="big-comment"><?php $this->commentsNum('%d'); ?></div>
                <?php Like_Plugin::theLike(ture,1); ?>

              </div>
            </div>
          </div>
    <?php else: ?>
          <div class="col-md-4 col-sm-4 col-xs-6 ">
            <div class="standard-article-box">
              <img src="<?php @Thumbnail_Plugin::show($this); ?>" alt="" class = "article-bgimg">
              <div class="article-information-box">
                <div class="article-type-<?php   echo ($this->categories[0]['directory'][0]); ?>"></div>
                <div class="article-time"><?php $this->date('Y/m/d'); ?></div>
                <div class="article-title"><a href="<?php $this->permalink() ?>"> <?php $this->title() ?> </a></div>
                <div class="article-author-headico"><?php GravatarCache::getGravatar($size = 32, $rating = 'G', $default = 'mm',$this->author); ?></div>
                <div class="article-authors"><?php $this->author(); ?></div>
                <div class="comment-ico"></div>
                <div class="comment"><?php $this->commentsNum('%d'); ?></div>
                
                  <?php  
                  Like_Plugin::theLike();
                  ?>
                

              </div>
            </div>
          </div>
    <?php endif; ?>
    <?php endwhile; ?>
          <div id="page-navibox" class="col-md-12 col-sm-12 col-xs-12 ">
             <div id="page-navi">
               <a id="navi-main" href="<?php $this->options->siteUrl('index.php/page/1/'); ?>">首页</a>
               <a id="navi-pre" href="<?php $this->options->siteUrl('index.php/page/1/'); ?>">上一页</a>
               <div id="page-select-boat">
               <div id="page-select-box">
                 <select name="page-select" id="page-select" onchange="self.location.href=options[selectedIndex].value">
                   
    
                 </select>
                 </div>
               </div>
               <a id="navi-next"  href="">下一页</a>
                
               <a id="navi-nextest" href="">尾页 </a>
               
             </div>
             <div id="navi-diy" class="hidden"><?php $this->pageNav('pre', 'next',10); ?></div>
             
          </div>
</div> 




<?php $this->need('footer.php'); ?>
