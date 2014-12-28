<?php
/**
 * <a href="http://banri.me">Banri's</a>
 * 
 * @package Theme-Banri
 * @author Banri
 * @version 2.1.0
 * @link http://banri.me
 */

 $this->need('header.php');
 ?>
<div id="wrap" class="width">
	<div>
		<?php while($this->next()): ?>
		<div class="loop">
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<div class="info">
				<?php $this->date('Y年m月d日'); ?><span class="line">|</span><?php $this->category('&#12288;'); ?><span class="line">|</span><a href="<?php $this->permalink() ?>#comments"><span class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></span></a><span class="line">|</span>标签：<?php $this->tags('&#12288;', true, '无'); ?>
			</div>
			<div class="content"><?php $this->content('Read More'); ?></div>
		</div>
		<?php endwhile; ?>
	</div>
	<div id="page">
		<?php $this->pageLink('&lt;','prev'); ?>
		<?php $this->pageLink('&gt;','next'); ?>
	</div>
</div>
<?php $this->need('footer.php'); ?>