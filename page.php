<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
<div class="col-md-9  right">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
		
		
		
    	<div id="blog-detail">            
		<div class="detial-article-information-box">
                <img src="images/p (1).jpg" alt="" class = "article-title-bgimg">
                <div class="white-cloth"></div>                
                <div class="detial-article-time">2014/08/20</div>
                <div class="detial-article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a> </div>
                <div class="detial-article-author-headico"><img src="images/3.jpg" alt=""></div>
                <div class="detial-article-authors"><a href="#">AEO</a></div>
            </div>
    	</div>
    	<div class="detial-article-content">
              <div class="article-type-ui"></div><?php $this->content(); ?>
        </div>
        <div class="detial-nav">
              <a href="#" class="comment-ico"></a>
                <div class="detail-comment">18</div>
                <a href="#" class="like-ico"></a>
                <div class="detail-like">12</div>
                <a href="#" class="next-page"></a>
                <a href="#" class="pre-page"></a>
                <hr class="detial-hr">
                <span>感谢您的阅读，本文由 协同软件前端组 版权所有，转载时请注明出处和链接，违者必究，谢谢您的合作</span>
         </div>
            
        
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
