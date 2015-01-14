<div id="comments">
    <div class="title">评论</div>
    <div class="info">
        <span class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>"></span>
    </div>
    <?php if($this->allow('comment')): ?>
    <div class="ds-thread" data-thread-key="<?php $this->cid(); ?>" data-title="<?php $this->title(); ?>" data-url="<?php $this->permalink(); ?>"></div>
    <?php endif; ?>
</div>