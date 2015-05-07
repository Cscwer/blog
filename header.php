<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <!-- <link rel="stylesheet" href="//cdn.staticfile.org/normalize/2.1.3/normalize.min.css"> -->
    <link class="bootstrap"  href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/blog.css'); ?>">

     <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header>
      <div id="leader-titlebox"><div id="leader-title" class="hidden"> HOME </div></div>
      <div class="container-fluid leaderrow"> 
          <div class="blogleaderbox" id="blogleaderbox" >
            <img class="menu" src="<?php $this->options->themeUrl('images/arrow-right.png'); ?> ">
             <ul class="lead" >
            <li><a href="<?php $this->options->siteUrl(); ?>" class=""><div>首页</div><div class="colorful-leader1">Home</div></a></li>
            <li><a href="#" class=""><div>作品</div><div class="colorful-leader2">Works</div></a></li>
            <li><a href="<?php $this->options->siteUrl('index.php/blog/'); ?>"><div>博客</div><div class="colorful-leader3">Blog</div></a></li>
            <li><a href="about-us.html" class=""><div>关于</div><div class="colorful-leader4">About</div></a></li>
          </ul>
          
          <div class="colorful-border1"></div>
          <div class="colorful-border2"></div>
          <div class="colorful-border3"></div>
          <div class="colorful-border4"></div>
          </div>
          
       </div> 
    </header>
<!-- end #header -->
<div class="contain">
      <div class="container-fluid">
        <div class="row">
    
    
