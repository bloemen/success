<div id="top-attention">
  <div class="wrapper">
    <p class="ttl_bold">attention</p>
    <ul>
      <?php global $smof_data, $post; ?>
      <?php $cat = get_the_category($post->ID) ?>
      <?php foreach($smof_data['attention'] as $post_id => $value){ ?>
      <!-- 更新ボックス -->
      <li>
        <a href="<?php echo get_permalink($post_id); ?>" rel="nofollow">
          <div class="nailthumb-container thumb_05">
            <div class="main_img_cam">
              <p>
                <?php echo get_the_post_thumbnail($post_id, 'index_thumb'); ?>
              </p>
            </div>
            <p class="cam_cat"><?php echo $cat[0]->name;?></p>
          </div>
          <p class="cam_ttl"><?php echo get_the_title($post_id);?></p>
        </a>
      </li>
      <!-- 更新ボックス -->
      <?php } ?>
    </ul>
  </div>
</div>
