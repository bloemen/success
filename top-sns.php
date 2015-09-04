<div id="top-sns">
<article id="sns_block" class="">
<p class="sns_ttl">きっとあなたのお役に立つはずです。</p>
<p class="sns_description">SNSでフォローすると、成功の法則の更新情報がすぐに手に入ります。</p>
<ul>
<?php
    $facebook_page_url = esc_url(get_option('facebook_page_url'));
    $twitter_from_db = esc_html(get_option('twitter_id'));
    $googleplus_from_db = esc_html(get_option('google_publisher'));
    $feedly_url = urlencode(get_bloginfo('rss2_url'));    
?>
<li class="icon_fb"<?php if( empty($facebook_page_url)) echo ' style="display: none;"'; ?>><a target="_blank" href="<?php echo $facebook_page_url;?>"><img src="<?php echo get_stylesheet_directory_uri() ;?>/images/i_fb_white.png" />Facebook</a></li>
<li class="icon_tw"<?php if( empty($twitter_from_db)) echo ' style="display: none;"'; ?>><a target="_blank" href="<?php echo $twitter_from_db;?>"><img src="<?php echo get_stylesheet_directory_uri() ;?>/images/i_tw_white.png" />Twitter</a></li>
<li class="icon_google"<?php if( empty($googleplus_from_db)) echo ' style="display: none;"'; ?>><a target="_blank" href="<?php echo $googleplus_from_db;?>"><img src="<?php echo get_stylesheet_directory_uri() ;?>/images/i_google_white.png" />Google+</a></li>
<li class="icon_feedly"<?php if( empty($feedly_url)) echo ' style="display: none;"'; ?>><a target="_blank" href="<?php echo $feedly_url;?>"><img src="<?php echo get_stylesheet_directory_uri() ;?>/images/i_feedly_white.png" />Feedly</a></li>
</ul>
</article>
</div>
