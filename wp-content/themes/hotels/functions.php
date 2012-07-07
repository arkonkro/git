<?php

require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');

add_theme_support( 'post-thumbnails' );
add_image_size( 'post_thumb', 634, 130);
add_image_size( 'best_thumb', 130, 86, true);

add_image_size( 'gal_thumb', 64, 48, true);
add_image_size( 'front_gal_large', 469, 232, true);
add_image_size( 'large_gal_thumb', 100, 100, true);

register_nav_menu('citymenu', 'City Menu');
register_nav_menu('todo', 'To Do Menu');

function custom_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

function multiple(array $_files, $top = TRUE)
{
    $files = array();
    foreach($_files as $name=>$file){
        if($top) $sub_name = $file['name'];
        else    $sub_name = $name;
       
        if(is_array($sub_name)){
            foreach(array_keys($sub_name) as $key){
                $files[$name][$key] = array(
                    'name'     => $file['name'][$key],
                    'type'     => $file['type'][$key],
                    'tmp_name' => $file['tmp_name'][$key],
                    'error'    => $file['error'][$key],
                    'size'     => $file['size'][$key],
                );
                $files[$name] = multiple($files[$name], FALSE);
            }
        }else{
            $files[$name] = $file;
        }
    }
    return $files;
}

function myhotels() {
    if(isset($_POST['submitted']) && $_POST['submitted'] == "yes"){
		
		update_option('facebook_link', $_POST['facebook_link']);
        
		if(isset($_FILES['cityheader']) && ($_FILES['cityheader']['size'] > 0)) {
			$arr_file_type = wp_check_filetype(basename($_FILES['cityheader']['name']));
			$uploaded_file_type = $arr_file_type['type'];

			$allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');

			if(in_array($uploaded_file_type, $allowed_file_types)) {
				$upload_overrides = array( 'test_form' => false ); 
				$uploaded_file = wp_handle_upload($_FILES['cityheader'], $upload_overrides);

				if(isset($uploaded_file['file'])) {
					$file_name_and_location = $uploaded_file['file'];
					update_option('cityheader', $uploaded_file['url']);
				} else {
					$upload_feedback = 'There was a problem with your upload.';
				}
			} else {
				$upload_feedback = 'Please upload only image files (jpg, gif or png).';
			}
		} else {
			$upload_feedback = false;
		}
		/*$gal = array();
		
		$files = multiple($_FILES);
		print_r($files);
		for($i=0; $i<6; $i++) {
			if(isset($files['gallery'][$i]) && ($files['gallery'][$i]['size'] > 0)) {
				$arr_file_type = wp_check_filetype(basename($files['gallery'][$i]['name']));
				$uploaded_file_type = $arr_file_type['type'];
	
				$allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');
	
				if(in_array($uploaded_file_type, $allowed_file_types)) {
					$upload_overrides = array( 'test_form' => false ); 
					$uploaded_file = wp_handle_upload($files['gallery'][$i], $upload_overrides);
	
					if(isset($uploaded_file['file'])) {
						$file_name_and_location = $uploaded_file['file'];
						$gal[$i] = $uploaded_file['url'];
					} else {
						$upload_feedback = 'There was a problem with your upload.';
					}
				} else {
					$upload_feedback = 'Please upload only image files (jpg, gif or png).';
				}
			} else {
				$upload_feedback = false;
			}
		}
		$gal = array_filter($gal);
		$gal = array_values($gal);
		update_option('gallery', $gal);*/
        echo "<div id=\"message\" class=\"updated fade\"><p><strong>Your settings have been saved.</strong></p></div>";
    }
?>
<div class="wrap">
<h2>Sites Settings</h2>
<form method="post" name="aminotastic" target="_self" enctype="multipart/form-data" >
<input type="submit" name="Submit" value="Save settings" /><br /><br />
<table style="border:1px solid #ccc; text-align:left;">
	<tr>
    	<td>
        	Facebook Link<br />
        	<input type="text" name="facebook_link" value="<?php echo get_option('facebook_link', ''); ?>" style="width:500px;" />
        </td>
    </tr>
	<tr>
		<td>
        	City Header<br />
        	<input type="file" name="cityheader" id="cityheader"  value="" />
            <br /><br />
            <?php $tmp = get_option('cityheader', FALSE); 
			if (trim($tmp)!=FALSE) { ?>
	            <img src="<?php echo $tmp; ?>" alt="" />
            <?php } ?>        
		</td>
	</tr>
  <?php /*  <tr>
    	<td>Gallery Images:<br />
        	<?php $gals = get_option('gallery'); 
				for($i=0; $i<6; $i++) { ?>
	        	<input type="file" name="gallery[<?php echo $i; ?>]" value="" /> <?php echo $gals[$i]; ?><br />
            <?php } ?>
        </td>
    </tr>*/ ?>
    
</table>	
<input name="submitted" type="hidden" value="yes" /><br />
<input type="submit" name="Submit" value="Save settings" />
</form>

</div>
<?php }

function myhotels_cp() {
	add_menu_page(__('Hotels'), __('Hotels'), 8, basename(__FILE__), 'myhotels');
}
add_action('admin_menu', 'myhotels_cp');



?>