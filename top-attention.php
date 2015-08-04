<div id="top-slide">
      <?php global $smof_data, $post; ?>
      <?php $cat = get_the_category($post->ID) ?>
      <?php foreach($smof_data['attention'] as $post_id => $value){ ?>
      <!-- 更新ボックス -->
      <div class="aimbox">
      <div class="aimboximg">
      <a href="<?php echo get_permalink($post_id); ?>" rel="nofollow">
            <div class="aim-thumbnail">
              <?php echo get_the_post_thumbnail($post_id, 'index_thumb'); ?>
            </div>
            </div>
      <div class="aimcategory"><?php echo $cat[0]->name;?></div>
      <p><?php echo get_the_title($post_id);?></p>
      </a>
      </div>
      <!-- 更新ボックス -->
      <?php } ?>
</div>
