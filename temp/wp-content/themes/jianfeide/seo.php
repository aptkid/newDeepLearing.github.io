<title><?php if ( is_home() ) { ?><?php if( get_option('wpbaike_homepage_title') ) { echo get_option('wpbaike_homepage_title'); } else { bloginfo('name'); } ?><?php } ?>
<?php if ( is_search() ) { ?>有关"<?php echo $s; ?>"的搜索结果 <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_404() ) { ?>404页面 <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_author() ) { ?>作者文章列表 <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_single() ) { ?><?php single_post_title(''); ?> <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php single_post_title(''); ?> <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { ?><?php single_cat_title(); ?> <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_tag() ) { ?><?php single_tag_title(''); ?> <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_year() ) { ?>"<?php the_time('Y'); ?>" <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_month() ) { ?>"<?php the_time('F, Y'); ?>" <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
<?php if ( is_day() ) { ?>"<?php the_time('F j, Y'); ?>" <?php if( get_option('wpbaike_homepage_keywords_separater') ){ echo get_option('wpbaike_homepage_keywords_separater'); } else { echo " - ";} ?> <?php bloginfo('name'); ?><?php } ?>
</title>
<?php
if (is_home()) { 
	if( get_option('wpbaike_homepage_description') ){ $homepage_description = get_option('wpbaike_homepage_description'); }
	if( get_option('wpbaike_homepage_keywords') ){ $homepage_keywords = get_option('wpbaike_homepage_keywords'); }
	$description = htmlentities(strip_tags(trim( $homepage_description )),ENT_QUOTES,'UTF-8');
	$keywords = htmlentities(strip_tags(trim( $homepage_keywords )),ENT_QUOTES,'UTF-8');
} elseif (is_single()) {
	if ( get_post_meta($post->ID, "description", $single = true) != "" )
	{
		$description = get_post_meta($post->ID, "description", $single = true);
	}
	if ( get_post_meta($post->ID, "keywords", $single = true) != "" )
	{
		$keywords = get_post_meta($post->ID, "keywords", $single = true);
	} else {	
		$tags = wp_get_post_tags($post->ID);
		foreach ($tags as $tag ) {
			$keywords = $keywords . $tag->name . ",";
		}
	}
} else if (is_page()) {
	if ( get_post_meta($post->ID, "description", $single = true) != "" )
	{
		$description = get_post_meta($post->ID, "description", $single = true);
	}
	if ( get_post_meta($post->ID, "keywords", $single = true) != "" )
	{
		$keywords = get_post_meta($post->ID, "keywords", $single = true);
	}
} else if (is_category()) {
	$description = htmlentities(strip_tags(trim(category_description())),ENT_QUOTES,'UTF-8');
	$category = get_the_category();
	$keywords = $category[0]->cat_name;
	
} else if (is_tag()) {
	$description = single_tag_title("", false);
	$keywords = single_tag_title("", false);
	
}
?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
