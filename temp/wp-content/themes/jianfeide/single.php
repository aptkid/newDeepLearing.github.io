<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

<?php include( TEMPLATEPATH . '/seo.php' ); ?>
<?php wp_head(); ?>
<LINK rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</HEAD>
<body class="custom-background">
<DIV class="divA">
<div class="menu">
  <?php wp_nav_menu( array('theme_location' =>'primary','container' => '','before' => '<li><b>','after' => '</b></li>','menu_class'  => 'navi' )); ?>
</div>

<DIV class="divE">
<DIV class="divE1"> &nbsp;<A href="http://www.weibo0633.com">快速增加粉丝点我！！！</A>  
&gt; <?php the_category(', ') ?> &gt; <?php the_title_attribute(); ?></DIV><br/>
<DIV class="divE2">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<DIV class="divE21">
<H2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></H2></DIV>
<div style="text-align:center; margin-top:-15px">
作者：<?php the_author(); ?>  | 所属分类：<?php the_category(', ') ?>  | 编辑时间：<?php the_date_xml()?>


</div>
<P><?php the_content(); ?></P>
<?php endwhile; ?>
<?php endif;?>
</DIV>
<div class="fenye">
<div style="float:left; margin-left:10px; margin-bottom:10px;"><?php if (get_previous_post()) { previous_post_link('上一篇: %link');} else {echo "没有了，已经是最后文章";} ?></div>
<div style="float:right; margin-right:10px; margin-bottom:10px;"><?php if (get_next_post()) { next_post_link('下一篇: %link');} else {echo "没有了，已经是最新文章";} ?> </div>
</div>
</DIV><br/>
<?php get_sidebar();?>
<DIV class="divF">


</DIV>

<?php get_footer();?>

</DIV></BODY></HTML>