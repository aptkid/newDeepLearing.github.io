<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

<?php include( TEMPLATEPATH . '/seo.php' ); ?>
<?php wp_head(); ?>
<LINK rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</HEAD>
<body class="custom-background">
<DIV class="divA">

 <?php include( TEMPLATEPATH . '/ad.php' ); ?>
<div class="menu">
  <?php wp_nav_menu( array('theme_location' =>'primary','container' => '','before' => '<li><b>','after' => '</b></li>','menu_class'  => 'navi' )); ?>
</div>