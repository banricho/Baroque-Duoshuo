<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="wrapper main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <div class="post-meta">
            <span class="post-category"><?php $this->category(','); ?></span><span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('n月j日'); ?></span><span class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></span>
        </div>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
