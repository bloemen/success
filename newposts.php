<?php
/*
 Template Name: newposts
*/
?>
<?php get_header(); ?>

<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=10&paged=$paged"); ?>

<div class="wrapper clearfix">
<article id="content" class="content grid_space s5o7">
<div id="category_title">NEW POSTS</div>
<div class="category_list_stock">
<?php if (have_posts()) :  ?>
	<?php while (have_posts()) : the_post();  ?>
	<div class="article-inner">
	<a href="<?php the_permalink();?>" alt="<?php  the_title();?>">
	<dl><dt>
	<?php if( has_post_thumbnail()) : ?>
		<div class="top_list_img"><?php the_post_thumbnail('post-thumbnail', array('class'=>'scale'));?></div>
	<?php endif; ?>
	<?php $category = get_the_category(); ?>
	<div class="top_list_cate"><?php echo $category[0]->name;?></div></dt>
	<dd>
	<h2 class="cate_ttl"><?php the_title();?></h2>
	</dd></dl></a>
	</div>
	<?php endwhile; else : ?>
	<div>お探しの記事は見つかりませんでした</div>
<?php endif; ?>
</div>
</article>
</div>


        <?php echo get_template_part('top','freedownload'); ?>

        <?php get_footer(); ?>