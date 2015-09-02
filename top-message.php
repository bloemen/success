<div id="top-slide">
<?php $messagePost = get_posts(array('name'=>'message', 'post_type'=>'page')); ?>
<?php if (count($messagePost)>0): ?>
<p class="ex_ttl">
<?php echo $messagePost[0]->post_title;?>
</p>
<p class="ex_content">
<?php echo $messagePost[0]->post_content;?>
</p>
<?php endif;?>
</div>
