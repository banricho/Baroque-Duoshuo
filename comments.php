<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="post">
    <?php if($this->allow('comment')): ?>
        <h3 class="post-title no-meta">评论</h3>
        <div class="ds-thread" data-thread-key="<?php $this->cid(); ?>" data-title="<?php $this->title(); ?>" data-url="<?php $this->permalink(); ?>"></div>
    <?php else: ?>
        <h3 class="post-title">评论已关闭</h3>
    <?php endif; ?>
</div>
