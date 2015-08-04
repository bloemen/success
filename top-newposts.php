<div id="top-newposts">
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
        <div class="box">
          <a href="<?php echo get_permalink(get_the_ID()); ?>">
          <div class="boximg"><?php echo get_the_post_thumbnail(get_the_ID(), 'index_thumb'); ?></div>
          <div class="category"><?php echo $cat[0]->name;?></div>
          <p><?php echo get_the_title();?></p>
          </a>
        </div>
        <!-- 更新ボックス -->
        <?php endwhile;?>
        <?php wp_reset_query();?>
</div>
