<div class="wideslider">
      <?php global $smof_data, $post; ?>
      <?php $cat = get_the_category($post->ID) ?>
  <ul>
      <?php foreach($smof_data['slide'] as $post_id => $value){ ?>
      <!-- 更新ボックス -->
          <li><a href="<?php echo get_permalink($post_id); ?>" rel="nofollow">
          <p>
                  <?php echo get_the_post_thumbnail($post_id, 'index_thumb'); ?>
          </p>
          <div class="topics_tag">
          <p class="aimcategory tag_default"><?php echo $cat[0]->name;?></p>
        </div>
          <p class="topics_ttl"><?php echo get_the_title($post_id);?></p>
          </a>
          </li>
      <!-- 更新ボックス -->
      <?php } ?>
    </ul>
</div>
