<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="detail-comment-box">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="comment-title"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('全部评论 <span class="comment-num">%d</span> 条')); ?></div>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
        
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('已登录: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
            <p>
                <input type="text" name="author" id="author" class="text" placeholder="Name(必填)" value="<?php $this->remember('author'); ?>" required />
                <input type="email" name="mail" id="mail" class="text" placeholder="Email(必填)"  value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </p>
            <?php endif; ?>
            <p>
                <textarea  name="text" id="textarea" class="textarea" placeholder="说点什么吧！"required ><?php $this->remember('text'); ?></textarea>
            </p>
            <p>
                <button type="submit" class="submit"><?php _e('评论'); ?></button>
            </p>
        </form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
