<?php
/*
* Template Name: Hotels Page
*/
?>
<?php get_header(); ?>
    <div class="middle">
        <?php get_sidebar(); ?>
        <div class="leftSide">
        	<?php 
			query_posts('category_name=hotels');
			if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="post">
            	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php /*<span class="date"><?php the_time('d M. Y'); ?></span>*/?>
                <div class="clear"></div>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumb', array('class'=>'alignleft')); ?></a>
                <?php the_excerpt(); ?>
                <div class="clear"></div>
            </div>
            <?php endwhile; endif;?>
        </div>
        <div class="clear"></div>
    </div>
<?php get_footer(); ?>