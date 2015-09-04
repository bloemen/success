<!-- fotter -->
<footer id="footer" class="footer">
<div class="footer_inner">
<section class="wrapper clearfix">
<div class="pagetop"><a href="#pagetop">PAGETOP</a></div>
<div class="f_logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo_f.png" width="306" height="155" alt="成功の法則" /></a></div>
<?php if (has_nav_menu('footer_nav')) {
	?>
        <?php
wp_nav_menu(
		array(
			'theme_location' => 'footer_nav',
			'menu_class' => 'list_categories',
			'menu_id' => '',
			'container' => 'ul',
			'container_id' => '',
			'container_class' => '',
		)
	);?>
        <ul style="display: none;">
   <?php
wp_nav_menu(
		array(
			'theme_location' => 'footer_nav',
			'menu_class' => 'list_categories',
			'menu_id' => '',
			'container' => 'ul',
			'container_id' => '',
			'container_class' => '',
		)

	);?>
         </ul>
         </section>
    </div><!-- /wrap -->
  </footer><!-- /footer-01 -->
<?php } //if footer_nav ?>

<!-- bottom -->

  <div  id="bottom" class="bottom">
    <section class="wrapper" sytle="">
        © Copyright <?php echo date('Y');?> <?php echo get_bloginfo('name');?>. All rights reserved.
    </section><!-- /wrap -->
  </div><!-- /footer-02 -->
  <?php
// }
?>
<?php wp_footer();?>


</script>
</body>
</html>