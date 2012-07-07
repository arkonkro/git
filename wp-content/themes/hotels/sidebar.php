	   	<div class="mapLink">
        <?php $p = get_page_by_title('Show Map'); ?>
        	<a href="<?php echo get_permalink($p->ID); ?>">Show map</a>
        </div>
	<div class="rightSide">
        	<div class="options">
            	<div class="optionBox">
                	<div class="title"><?php bloginfo('name'); ?></div>
                    <?php wp_nav_menu( array('menu' => 'City Menu', 'container' => '', 'items_wrap'      => '<ul class="citymenu">%3$s</ul>' )); ?>
                    <div class="clear"></div>
                </div>
                <div class="optionBox">
                	<div class="title">THINGS TO DO</div>
                    <?php $hcat = get_category_by_slug('hotels');
						$uncat = get_category_by_slug('uncategorized');
						$tmp = get_categories('hide_empty=0&exclude='.$hcat->term_id.','.$uncat->term_id); ?>
                    <ul class="todo">
                    	<?php foreach ($tmp as $cat) { ?>
                    	<li><?php $meta = categoryCustomFields_GetImage($cat->term_id, 'image', 17, 16); 
							if ($meta!=false) { ?>
                        	<img src="<?php echo $meta; ?>" alt="" />
                            <?php } else { ?>
                            	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon_allthingsToDo.jpg" alt=""/>
                            <?php } ?>
                        <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a> (<?php echo $cat->category_count; ?>)</li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
			<div class="bestHotels">
               	<h2>The best hotels we have in <?php bloginfo('name'); ?></h2>
                <ul>
                	<?php $my_query = new WP_Query('posts_per_page=4&tag=best'); 
						if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post(); ?>
                	<li>
                    	<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(138,86)); ?></a></div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span class="reviews">0 REVIEWS</span>
                        <span class="price">N64,417</span>
                        <span class="clear"></span>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
			</div>
        </div>