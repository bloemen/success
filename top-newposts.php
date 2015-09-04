<div class="wrapper clearfix">
<article id="top-newposts" class="content grid_space s2o7">
<div class="top_list_stock">
<div class="area_ttl_new">NEWEST POST</div>
      <?php
            $args=array(
              //   'meta_query'=>
              //   array(
              //     array(  'key'=>'bzb_show_toppage_flag',
              //                'compare' => 'NOT EXISTS'
              //     ),
              //     array(  'key'=>'bzb_show_toppage_flag',
              //               'value'=>'none',
              //               'compare'=>'!='
              //     ),
              //    'relation'=>'OR'
              // ),
                'showposts'=>8,
                'orderby'=>'post_date',
                'order'=>'desc'
              );
      ?>
        <?php query_posts($args); ?>
        <?php global $the_post; ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $cat = get_the_category(get_the_ID()) ?>
        <!-- 更新ボックス -->
        <div class="article-inner">
          <a href="<?php echo get_permalink(get_the_ID()); ?>">
          <dl><dt>
          <div class="nailthumb-container thumb_07"><?php echo get_the_post_thumbnail(get_the_ID(), 'index_thumb fill'); ?></div>
          </dt>
          <dd>
          <div class="top_list_cate"><?php echo $cat[0]->name;?></div>
          <h2><?php echo get_the_title();?></h2>
          <div class="top_list_date"><?php the_time('Y.m.d')?></div>
          </dd></dl>
          </a>
        </div>
        <!-- 更新ボックス -->
        <?php endwhile;?>
        <?php wp_reset_query();?>
        <div class="more_btn"><a href="newposts" rel="next">他の新着記事を読む</a></div>
</div>

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