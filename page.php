<?php $this->need('header.php'); ?>
<div id="wrap" class="width">
    <div id="article">
        <h2><?php $this->title() ?></h2>
        <div class="info">最后编辑@<?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></div>
        <div class="content">
            <?php $this->content(''); ?>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>