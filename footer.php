<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="footer">
    <div class="wrapper btm clearfix">
        <div class="btm-nav">
            <?php if ($this->is('index')): ?>
                <h3 class="btm-title">友情链接</h3>
                <ul class="btm-list links clearfix">
                    <?php Links_Plugin::output($pattern=NULL, $links_num=10, $sort=NULL); ?>
                </ul>
            <?php else: ?>
                <h3 class="btm-title">最新文章</h3>
                <ul class="btm-list">
                    <?php $this->widget('Widget_Contents_Post_Recent')->to($post); ?>
                    <?php while($post->next()): ?>
                        <li><a href="<?php $post->permalink(); ?>"><?php $post->title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="btm-nav">
            <h3 class="btm-title">随机文章</h3>
            <ul class="btm-list">
                <?php RandomArticleList::parse(); ?>
            </ul>
        </div>

        <div class="btm-nav">
            <h3 class="btm-title">热门标签</h3>
            <ul class="btm-list tags clearfix">
                <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 20))->parse('<li><a href="{permalink}" title="{count} 个相关">{name}</a></li>'); ?>
            </ul>
            <ul class="cpr">
                <li><a href="http://weibo.com/banrikun" target="_blank" title="新浪微博" data-icon="s"></a>
                </li><li><a href="https://github.com/banrikun" target="_blank" title="GitHub" data-icon="g"></a>
                </li><li><a href="http://brdev.org" target="_blank" title="学习笔记" data-icon="c"></a>
                </li><li><a href="<?php $this->options->feedUrl(); ?>" target="_blank" title="订阅我" data-icon="f"></a>
                </li><li><a href="http://typecho.org" target="_blank" title="Powered by Typecho" data-icon="t"></a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="<?php $this->options->themeUrl('scripts/ds.js'); ?>" async></script>
<?php $this->footer(); ?>
</body>
</html>
