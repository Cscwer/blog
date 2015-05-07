<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
<div class="col-md-9  right">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        
        
        
        <div id="blog-detail">            
            <div class="detial-article-information-box">
                <img src="<?php @Thumbnail_Plugin::show($this); ?>" alt="" class = "article-title-bgimg">
                <div class="white-cloth"></div>            
                <div class="detial-article-time"><?php $this->date('Y/m/d'); ?></div>
                <div class="detial-article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a> </div>
                <div class="detial-article-author-headico"><?php GravatarCache::getGravatar($size = 56, $rating = 'G', $default = 'mm',$this->author); ?></div>
                <div class="detial-article-authors"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></div>
            </div>
        <div class="detial-article-content">
              <div class="article-type-<?php   echo ($this->categories[0]['directory'][0]); ?>"></div><?php $this->content(); ?>
        </div>
        <div class="detial-nav">
              <a href="#comment-form" class="comment-ico"></a>
                <div class="detail-comment"><?php $this->commentsNum(_t('0'), _t('1'), _t('%d')); ?></div>
                <?php Like_Plugin::theLike(ture,2); ?>
                <?php $this->theNext('%s','<a class="pre-page" title="没有了哟！"><div></div></a>',array('title' => "<div ></div>", 'tagClass' => 'pre-page')); ?>

                <?php $this->thePrev('%s',' <a class="next-page" title="没有了哟！"><div></div></a>', array('title' => "<div ></div>", 'tagClass' => 'next-page')); ?> 
                <!-- <a href="#" class="pre-page"></a> -->
                <hr class="detial-hr">
                <span>感谢您的阅读，本文由 协同软件前端组 版权所有，转载时请注明出处和链接，违者必究，谢谢您的合作</span>
         </div>
           
        
    
    <?php $this->need('comments.php'); ?>
    </article>
    </div>


<?php $this->need('footer.php'); ?>
