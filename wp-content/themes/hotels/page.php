<?php get_header(); ?>
    <div class="middle">
        <?php get_sidebar(); ?>
        <div class="leftSide">
        <?php if (is_front_page()) {
				$gall = get_page_by_title('Gallery'); 
				$args = array(
					'post_type' => 'attachment',
					'numberposts' => 6,
					'post_status' => null,
					'post_parent' => $gall->ID
				); 
				$attachments = get_posts($args);
				$ok=false;
				$html = '<div class="mygallery">';
				if ($attachments) {
					$html .= '<div class="large">';
					$k=0;
					foreach ($attachments as $attachment) {
						$k++;
						$html .= '<img src="'.wp_get_attachment_url( $attachment->ID ).'" width="469" height="232" alt="" '.(($ok==FALSE)? 'class="show"':'').' id="large'.$k.'" />';
						$ok=true;
					}
					$html .= '</div>';
					$html .= '<div class="galimg">
						<ul>';
						$k=0;
					foreach ($attachments as $attachment) {
						$k++;
						$html .= '<li><a href="#'.$k.'"><img src="'.wp_get_attachment_url( $attachment->ID ).'" alt="" width="64" height="48" /></a></li>';
					}
					$html .= '<li class="clear"></li>
							</ul>
							<div class="clear"></div>
							<a href="'.get_permalink($gall->ID).'" class="galleryLink">Pafos image gallery</a>
						</div>';
				}
				$html .= '<div class="clear"></div></div>';
				echo $html;
			} ?>
        <?php /*	<div class="gallery">
            	<div class="large"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage.jpg" alt="" width="469" height="232" class="show" id="large1" /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage1.jpg" alt="" width="469" height="232" id="large2" /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage2.jpg" alt="" width="469" height="232" id="large3" /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage3.jpg" alt="" width="469" height="232" id="large4" /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage4.jpg" alt="" width="469" height="232" id="large5" /><img src="<?php bloginfo('stylesheet_directory'); ?>/img/largeImage5.jpg" alt="" width="469" height="232" id="large6" /></div>
                <div class="galimg">
                    <ul>
                        <li><a href="#1"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small1.jpg" alt="" width="64" height="48" /></a></li>
                        <li><a href="#2"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small2.jpg" alt="" width="64" height="48" /></a></li>
                        <li><a href="#3"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small3.jpg" alt="" width="64" height="48" /></a></li>
                        <li><a href="#4"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small4.jpg" alt="" width="64" height="48" /></a></li>
                        <li><a href="#5"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small5.jpg" alt="" width="64" height="48" /></a></li>
                        <li><a href="#6"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/small6.jpg" alt="" width="64" height="48" /></a></li>
                        <li class="clear"></li>
                    </ul>
                    <div class="clear"></div>
                    <a href="#" class="galleryLink">Pafos image gallery</a>
				</div>
                <div class="clear"></div>
            </div>   
            <h1 class="textCenter">Come work, meet, learn, and share</h1>
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel dolor ut quam consequat vehicula. Maecenas venenatis molestie dui, quis convallis nibh dictum vel.</h2>
            <p>Nunc eu urna id libero tincidunt vehicula ut sit amet ante. Suspendisse at libero lorem, eget mollis turpis. Donec diam quam, auctor non euismod at, porta sit amet dolor. Aliquam ut purus vitae augue ultrices lacinia. Maecenas volutpat cursus sapien et tincidunt. Pellentesque eros justo, porttitor non fringilla et, aliquet nec nisl. Duis auctor ante sed tortor aliquet at pharetra ipsum eleifend. Vivamus non faucibus purus. Curabitur feugiat consectetur orci a dignissim. Nulla non egestas felis.</p>
            <p>Ut ullamcorper elementum ligula, vel eleifend elit sodales congue. Donec non nibh a lorem tempus fermentum. Fusce scelerisque nunc a dui fringilla at laoreet elit malesuada. <a href="#">Mauris eleifend porttitor</a> urna rutrum laoreet. Ut velit augue, semper vitae sollicitudin eu, sagittis ut arcu. Fusce eros arcu, auctor a aliquet sit amet, vulputate ac nulla. In bibendum, sapien vitae condimentum vehicula, sapien neque laoreet magna, a varius est risus venenatis sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus ac neque dui. Quisque aliquet volutpat iaculis. Morbi vitae tellus ut nibh facilisis euismod vel cursus elit. Sed nec lorem tincidunt augue fermentum consectetur non dignissim nisi. Proin non arcu neque.</p>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed convallis tristique risus. Vivamus in est leo, et consequat nisl. Sed auctor, eros et lacinia malesuada, magna turpis consequat enim, non feugiat neque massa sit amet libero. Etiam interdum pellentesque risus, non iaculis nulla congue eu. Etiam ac egestas arcu. Quisque non fermentum odio. Pellentesque vitae neque a lorem sollicitudin posuere quis eu nisi. Suspendisse potenti. Vivamus tempor, lacus vel ultricies pellentesque, tellus nunc volutpat est, at rutrum ante dolor quis nibh. Cras vel justo sed risus congue blandit.</p> */?>
        	<?php if (have_posts()):while(have_posts()): the_post(); ?>
            	<?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <div class="clear"></div>
    </div>
<?php get_footer(); ?>