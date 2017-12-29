<DIV class="divD">
      <?php
			  $left = get_option('wpbaike_left_id');
			  $center = get_option('wpbaike_center_id');
			  $right = get_option('wpbaike_right_id');
			  $display_categories = array($left,$center,$right); foreach ($display_categories as $category) { ?>
      <?php query_posts("showposts=10&cat=$category")?>
      <?php if($category==$left):?>
  <?php echo ''; ?>
          <?php else : ?>
          <DIV class="divD2"></DIV>
            <?php endif; ?>
<DIV class="divD1">
<DIV class="divD11">
<DIV class="divD111"> &nbsp;<a href="<?php echo get_category_link($category);?>">
                <?php single_cat_title(); ?>
                </a></DIV>
<DIV class="divD112"><A href="<?php echo get_category_link($category);?>" target="_blank">更多&gt;&gt;</A></DIV></DIV>
<DIV class="divD12">
<DIV class="divD121">
<DIV class="divD1211">  <?php while (have_posts()) : the_post(); ?> 
    <li>&laquo; <a href="<?php the_permalink() ?>"> <?php echo mb_strimwidth(get_the_title(), 0, 32, ''); ?></a><span style="float:right"><?php the_date_xml()?></span></li> 
<?php endwhile;?></DIV>
</DIV>
</DIV></DIV>

<?php } wp_reset_query();?>



</DIV>