<?php get_header(); ?>

<?php echo get_template_part('top','slide'); ?>

<div id="content">

<div class="wrap">
    
  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">


    <div class="main-inner">

        <?php echo get_template_part('top','message'); ?>
        <?php echo get_template_part('top','attention'); ?>
        <?php echo get_template_part('top','newposts'); ?>
        <?php echo get_template_part('top','freedownload'); ?>
        <?php echo get_template_part('top','category'); ?>
        <?php echo get_template_part('top','sns'); ?>

    </div><!-- /main-inner -->

  </div><!-- /main -->
  

</div><!-- /wrap -->
  
</div><!-- /content -->

<?php get_footer(); ?>


