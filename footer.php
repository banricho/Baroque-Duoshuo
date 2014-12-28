<div id="footer">
	<div id="bottomnav">
		<?php if ($this->is('index')): ?>
		<div class="list links">
			<h3>友情链接</h3>
			<ul>
				<?php Links_Plugin::output(); ?>
			</ul>
		</div>
		<?php else: ?>
		<div class="list article">
			<h3>最新文章</h3>
			<ul>
				<?php $this->widget('Widget_Contents_Post_Recent')->to($post); ?>
				<?php while($post->next()): ?>
				<li><a href="<?php $post->permalink(); ?>"><?php $post->title(15, ''); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>
		<div class="list article">
			<h3>随机文章</h3>
			<ul>
				<?php RandomArticleList::parse(); ?>
			</ul>
		</div>
		<div class="list tags">
			<h3>热门标签</h3>
			<ul>
				<?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 20))->parse('<li><a href="{permalink}" title="{count} 个相关">{name}</a></li>'); ?>
			</ul>
		</div>
	</div>
	<div id="bottom">
		<div id="copyright">
			&copy; 2012 - 2015 <?php $this->options->title() ?>.
			Powered by <a href="http://typecho.org" target="_blank">Typecho</a> &amp; <a href="http://duoshuo.com" target="_blank">Duoshuo</a>.
			Designed by <a href="http://banri.me" target="_blank">Banri</a>.
		</div>
		<div id="totop">▲</div>
	</div>
</div>
<?php $this->footer(); ?>
<script src="http://tajs.qq.com/stats?sId=25160887"></script>
</body>
</html>