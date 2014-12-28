<?php $this->need('header.php'); ?>
<div id="wrap" class="width">
	<div id="article">
		<h2><?php $this->title() ?></h2>
		<div class="info">
			<?php $this->date('Y年m月d日'); ?><span class="line">|</span><?php $this->category('&#12288;'); ?><span class="line">|</span><span class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></span><span class="line">|</span>标签：<?php $this->tags('&#12288;', true, '无'); ?>
		</div>
		<div class="content">
			<?php $this->content(''); ?>
		</div>
	</div>
	<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>