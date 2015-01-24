<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform">
<title><?php if ( $this->is('single') || $this->is('page') || $this->is('category') || $this->is('tag') ) { $this->archiveTitle('','',''); } else { $this->options->title(); } ?></title>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('style.css'); ?>" />
<?php $this->header("generator=&template="); ?>
</head>
<body>
<div id="header">
    <div class="width">
        <ul id="nav">
            <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?>
            <li<?php if ($this->is('post')): ?><?php if($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>><a href="<?php $category->permalink(); ?>" ><?php $category->name(); ?></a></li>
            <?php endwhile; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
        <h1 class="right"><?php $this->options->title() ?></h1>
        <div id="triangle" class="right"></div>
        <form id="search" class="right" method="post" action="/">
            <input type="text" name="s" value="(<ゝω·)☆" onfocus="if (value =='(<ゝω·)☆'){value =''}" onblur="if (value ==''){value='(<ゝω·)☆'}" autocomplete="off" />
        </form>
    </div>
</div>