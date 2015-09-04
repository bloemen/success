<div id="top-freedownload">
<?php $mainCtaPosts = get_posts(array('name'=>'main_cta', 'post_type'=>'CTA')); ?>
<?php if( count($mainCtaPosts) > 0 )  : ?>
	<?php $metaData=get_post_meta($mainCtaPosts[0]->ID, 'bzb_cta', true); ?>
	<?php extract($metaData); ?>

	<article id="message_block" class="">
	<div class="wrapper clearfix">
	<div class="message_ttl"><?php echo $mainCtaPosts[0]->post_title;?></div>
	<div class="message_content"><?php echo $mainCtaPosts[0]->post_content;?></div>
	<div class="message_btn"><a href="<?php if ( isset($select_button_url)) echo $select_button_url?>"><?php if( isset($select_button)) echo $select_button;?></a></div>
	</div>
	</article>
<?php endif;?>
</div>