<?php get_header(); ?>
<div id="content">
  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <article id="content_top_block" class="grid_space">
        <?php echo get_template_part('top','slide'); ?>
        <?php echo get_template_part('top','message'); ?>
        <?php echo get_template_part('top','attention'); ?>
    </article>
        <?php echo get_template_part('top','newposts'); ?>
        <?php echo get_template_part('top','freedownload'); ?>
        <?php echo get_template_part('top','category'); ?>
        <?php echo get_template_part('top','sns'); ?>
  </div><!-- /main -->
  

</div><!-- /wrap -->
  
</div><!-- /content -->

<?php get_footer(); ?>


