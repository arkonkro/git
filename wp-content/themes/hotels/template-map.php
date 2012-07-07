<?php
/*
* Template Name: Map page
*/
?>
<?php get_header(); ?>
    <div class="middle">
        <?php get_sidebar(); ?>
        <div class="leftSide">
        	<?php if(have_posts()):while(have_posts()):the_post(); 
				the_content();
			endwhile; endif; ?>
        </div>
        <div class="clear"></div>
    </div>
<?php get_footer(); ?>