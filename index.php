<?php
/**
 * theme baroque for typecho
 *
 * @package baroque
 * @author banri
 * @version 3.0
 * @link http://banri.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="wrapper">
    <div class="main" role="main">
        <?php while($this->next()): ?>
            <article class="post">
                <h2 class="post-title" itemprop="name headline">
                    <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>

                <div class="post-meta">
                    <span><?php $this->category(','); ?></span><span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('n月j日'); ?></span><span><a href="<?php $this->permalink() ?>#comments" class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></a></span>
                </div>

                <div class="post-content" itemprop="articleBody">
                    <?php $this->content('- 阅读全文 -'); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>

    <div class="pagenav clearfix">
        <?php $this->pageLink('&lt;','prev'); ?>
        <?php $this->pageLink('&gt;','next'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
