<?php get_header(); ?>
    <?php
      if ( have_posts() ) :

        while ( have_posts() ) : the_post();
        
        ?>

    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    ?>

    <?php
      $postThumbnailId = get_post_thumbnail_id();
      if (!empty($postThumbnailId) && $postThumbnailId !== false) :
        $thumbnailUrl = wp_get_attachment_url($postThumbnailId);
      endif;

      $category = get_the_category();
?>

<div id="under_global_menu"<?php if (isset($thumbnailUrl)) : ?> style="background-image:url(<?php echo $thumbnailUrl;?>); background-repeat: no-repeat; background-position: center;"<?php endif;?>>
  <div class="bg-wrap">
    <div class="wrapper">
      <?php bzb_breadcrumb(); ?>
      <div class="under_global_menu_r">
        <?php if (isset($thumbnailUrl)) : ?>
          <img class="scale" data-scale="fill" src="<?php echo $thumbnailUrl;?>" alt="" width="914" height="525" />
        <?php endif; ?>
          </div>

          <div class="under_global_menu_l">
          <div class="topics_tag"><p class="tag_default"><?php echo $category[0]->name;?></p></div>
          <p class="topics_date"><?php the_date('Y.m.d'); ?></p>

          <h1 class="topics_ttl"><?php the_title(); ?></h1>
<?php  bzb_social_buttons(); ?>
</div></div></div></div>

<div class="wrapper clearfix">
<article id="content" class="content grid_space s5o7">
<div class="category_list_stock">

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

<div class="article-inner"><div class="box_content">
        <?php the_content(); ?>
        <?php bzb_social_buttons(); ?>
<!-- Here is the Social big share buttons (not discovery function)  -->
</div>
</div>
<div class="under_post_category"><div class="icon_tag"><i class="fa fa-tag fa-flip-horizontal"></i></div><p>カテゴリー<a href="/category/<?php echo $category[0]->slug;?>"><?php echo $category[0]->name; ?></a></p></div>
</div></div>
</article>

<aside id="sidebar" class="sidebar grid_space s2o7">
<div class="side_greeting">
<?php $sideGreetingPost = get_posts(array('name'=>'side_greeting', 'post_type'=>'page')); ?>
<?php if (count($sideGreetingPost) > 0 ) : ?>
  <h2><?php echo $sideGreetingPost[0]->post_title; ?></h2>
  <p><?php echo $sideGreetingPost[0]->post_content; ?></p>
<?php endif; ?>
</div>
<?php dynamic_sidebar('sidebar'); ?>
</aside>
</div>

<article id="message_block" class="">
<div class="wrapper clearfix">
<?php echo bzb_get_cta($post->ID); ?>
</div>
</article>

    <article id="related_block" class="">
<div class="wrapper clearfix">
  <?php
    $ids = "";
                    if(is_array(get_post_meta($post->ID,'bzb_related', true) )){
                        $ids = implode( get_post_meta($post->ID,'bzb_related', true) , ',');
                    }
                    echo do_shortcode( '[related_post themes="flat" id="'.get_the_ID().' ids="' . $ids . '"]' ); 
?>

  </div></div></article>




<div class="wrapper clearfix">
<?php echo get_template_part('top','sns'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
