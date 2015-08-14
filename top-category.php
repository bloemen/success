<div class="wrapper clearfix">
<div id="top-cateogry">
<article id="content_category_block">
  <?php echo show_category(5); ?>
  <?php echo show_category(2); ?>
  <?php echo show_category(3); ?>
  <?php echo show_category(4); ?>
  </article>
</div>
</div>


<?php
function show_category($cid=1){
         $category = '';
            $categoryData = get_category($cid);

if (!is_null($categoryData)) :
            $categoryName = $categoryData->name;
            $categorySlug = $categoryData->slug;

 $category .=<<< EOF
<div class="tags_list">
<div class="tags_list_line"></div>
<div class="tags_list_ttl">{$categoryName}</div>
<ul class="list_category">
EOF;

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

         while (have_posts()) : the_post();
           $cat = get_the_category(get_the_ID());
           $link = get_permalink(get_the_ID());
           $src = get_the_post_thumbnail(get_the_ID(), 'index_thumb scale');
           $c_name = $cat[0]->name;
           $title = get_the_title();
$category .=<<<EOF
        <li>
          <a href="{$link}">
          <div class="nailthumb-container thumb_03">{$src}</div>
          <div class="list_category_top_ttl">{$title}</div>
          </a>
        </li>
EOF;
         endwhile;
         wp_reset_query();
$category .=<<<EOF
</ul>
<div class="more_btn"><a href="{$categorySlug}" rel="">このカテゴリー記事を読む</a></div></div>
EOF;
endif;

         return $category;
}