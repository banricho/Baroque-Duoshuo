<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="post">
    <h3 class="post-title">评论</h3>
    <?php if($this->allow('comment')): ?>
        <div class="post-meta">
            <span class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></span>
        </div>
        <div class="ds-thread" data-thread-key="<?php $this->cid(); ?>" data-title="<?php $this->title(); ?>" data-url="<?php $this->permalink(); ?>"></div>
    <?php else: ?>
        <div class="post-meta">
            评论已关闭
        </div>
    <?php endif; ?>
</div>
