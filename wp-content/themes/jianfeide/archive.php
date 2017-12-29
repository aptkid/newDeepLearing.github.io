<?php get_header();?>

<DIV class="divE">
<DIV class="divE1"> &nbsp;<A href="http://www.weibo0633.com">粉丝阁</A> 
&gt;&gt; <?php the_category(', ') ?> </DIV>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<DIV class="divE2">
<DIV class="divF336">
<DIV class="divF3361"> &laquo; <a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></DIV>
<DIV class="divF3362"><?php the_date_xml()?></DIV></DIV>
</DIV>

<?php endwhile; ?>
<?php endif;?>
<div style="clear:both"></div><br/>
<div>
 <div class="wpagenavi">
                    <?php if(function_exists('wpyou_pagenavi')) { wpyou_pagenavi(9); } ?>
                </div>
</div><br/>
</DIV><br/>

<?php get_sidebar();?>
<DIV class="divF">


</DIV>

<?php get_footer();?>

</DIV></BODY></HTML>