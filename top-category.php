<div id="top-cateogry">
  <?php echo show_category(1); ?>
  <?php echo show_category(2); ?>
  <?php echo show_category(3); ?>
  <?php echo show_category(4); ?>
</div>


<?php
function show_category($cid=1){
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
                'showposts'=>4,
                'cat'=>$cid,
                'orderby'=>'post_date',
                'order'=>'desc'
              );
  
         query_posts($args);
         global $the_post;
         $category = '';
         while (have_posts()) : the_post();
           $cat = get_the_category(get_the_ID());
           $link = get_permalink(get_the_ID());
           $src = get_the_post_thumbnail(get_the_ID(), 'index_thumb');
           $c_name = $cat[0]->name;
           $title = get_the_title();
echo $category .=<<<EOF
        <div class="box">
          <a href="{$link}">
          <div class="boximg">{$src}</div>
          <div class="category">{$c_name}</div>
          <p>{$title}</p>
          </a>
        </div>
EOF;
         endwhile;
         wp_reset_query();

         return $category;
}