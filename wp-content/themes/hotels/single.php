<?php get_header();?>
    <div class="middle">
        <?php get_sidebar(); ?>
        <div class="leftSide">
        	<?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="post">
            	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php /*<span class="date">1 jan. 2012<?php the_date('d M. Y'); ?></span>*/?>
                <div class="clear"></div>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumb', array('class'=>'alignleft')); ?></a>
                <?php the_content(); ?>
                <div class="clear"></div>
                <div class="lastmodified">Last updated: <?php the_modified_time('d.m.Y'); ?></div>
                <div class="clear"></div>
            </div>
            <?php endwhile; endif;?>
        </div>
        <div class="clear"></div>
    </div>
<?php get_footer(); ?>