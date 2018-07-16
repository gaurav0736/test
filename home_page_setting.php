<?php
function riverside_image_uploader( $name, $width, $height ) {
    // Set variables
    $options = get_option( $name );
    $default_image = plugins_url('img/no-image.png', __FILE__);
    if ( !empty( $options ) ) {
        $image_attributes = wp_get_attachment_image_src( get_option( $name ), array( $width, $height ) );
        $src = $image_attributes[0];
        $value = get_option( $name );
    } else {
        $src = $default_image;
        $value = '';
    }
    $text = __( 'Upload', RSSFI_TEXT );
    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="' . $width . 'px" height="' . $height . 'px" />
            <div>
                <input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
                <button type="submit" class="upload_image_button button">' . $text . '</button>
                <button type="submit" class="remove_image_button button">&times;</button>
            </div>
        </div>
    ';
}

function riverside_load_scripts_admin() {  
    // WordPress library
    wp_enqueue_media();}
add_action( 'admin_enqueue_scripts', 'riverside_load_scripts_admin' );


function home_page_information(){  
  	wp_enqueue_script('post');
if ( user_can_richedit() )
    wp_enqueue_script('editor');
    wp_enqueue_script('word-count');
   

   
 ?>
<style>
    .boxed{
	border:2px solid #ccc;
	padding:20px;
	border-collapse:separate;
    }
    
</style>


<div class="wrap">
    
        <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

        <div id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    <form method="post" action="options.php" enctype="multipart/form-data">
			<?php settings_fields('homepage_info'); ?>
			    
			<fieldset>
			  <legend><h2>Banner Section </h2></legend>
				<table class="form-table boxed">
				   <tr valign="top"><th scope="row"><?php _e('Section 1', 'ap'); ?></th>
					<td>
					    
					     <textarea name="sec1_title" rows="2" cols="50" ><?php echo get_option('sec1_title') ?></textarea>
					     <br />
					    <label class="description" for="sec1_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="sec1_content" value="<?php echo get_option('sec1_content') ?>" size="50">
					     <br />
					    <label class="description" for="sec1_content"><?php _e('Content', 'ap'); ?></label>
					</td>
				   </tr> 
				   <tr valign="top"><th scope="row"></th>
					<td>
					    <input type="text" name="sec1_url" value="<?php echo get_option('sec1_url') ?>" size="50">
					     <br />
					    <label class="description" for="sec1_url"><?php _e('Buy Now Link', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'sec1_image', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr> 
				   <tr>
				   	<td colspan="5"><hr></td>
				   </tr> 
				    <tr valign="top"><th scope="row"><?php _e('Section 2', 'ap'); ?></th>
					<td>
					    
					     <textarea name="sec2_title" rows="2" cols="50" ><?php echo get_option('sec2_title') ?></textarea>
					     <br />
					    <label class="description" for="sec2_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="sec2_content" value="<?php echo get_option('sec2_content') ?>" size="50">
					     <br />
					    <label class="description" for="sec2_content"><?php _e('Content', 'ap'); ?></label>
					</td>
				   </tr> 
				   <tr valign="top"><th scope="row"></th>
					<td>
					    <input type="text" name="sec2_url" value="<?php echo get_option('sec2_url') ?>" size="50">
					     <br />
					    <label class="description" for="sec2_url"><?php _e('Buy Now Link', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'sec2_image', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr> 
				   <tr>
				   	<td colspan="5"><hr></td>
				   </tr> 
				    <tr valign="top"><th scope="row"><?php _e('Section 3', 'ap'); ?></th>
					<td>
					    
					     <textarea name="sec3_title" rows="2" cols="50" ><?php echo get_option('sec3_title') ?></textarea>
					     <br />
					    <label class="description" for="sec3_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="sec3_content" value="<?php echo get_option('sec3_content') ?>" size="50">
					     <br />
					    <label class="description" for="sec3_content"><?php _e('Content', 'ap'); ?></label>
					</td>
				   </tr> 
				   <tr valign="top"><th scope="row"></th>
					<td>
					    <input type="text" name="sec3_url" value="<?php echo get_option('sec3_url') ?>" size="50">
					     <br />
					    <label class="description" for="sec3_url"><?php _e('Buy Now Link', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'sec3_image', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr> 
				   <tr>
				   	<td colspan="5"><hr></td>
				   </tr> 
			 </table>
		 </fieldset>



		 <fieldset>
			      <legend><h2>Products Section</h2></legend>
				<table class="form-table boxed">
				   <tr valign="top"><th scope="row"><?php _e('Title', 'ap'); ?></th>
					<td>					   
					     <input type="text" name="section2_title" value="<?php echo get_option('section2_title') ?>" size="50">
					     <br />
					    <label class="description" for="section2_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>					   
					     <input type="text" name="section2_content" value="<?php echo get_option('section2_content') ?>" size="50">
					     <br />
					    <label class="description" for="section2_content"><?php _e('Subheading', 'ap'); ?></label>
					</td>
				   </tr> 
				    
				    <tr valign="top"><th scope="row"><?php _e('Button', 'ap'); ?></th>
					<td>
					    <input type="text" name="section2_btext" value="<?php echo get_option('section2_btext') ?>" size="50">
					     <br />
					    <label class="description" for="section2_btext"><?php _e('Text', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="section2_burl" value="<?php echo get_option('section2_burl') ?>" size="50">
					     <br />
					    <label class="description" for="section2_burl"><?php _e('Url', 'ap'); ?></label>
					</td>
				    </tr> 
				    			    
			 </table>
			   </fieldset>


			    <fieldset>
			      <legend><h2>Discount Section</h2></legend>
				<table class="form-table boxed">
				   <tr valign="top"><th scope="row"><?php _e('Description', 'ap'); ?></th>
					<td>					   
					     <?php  

                                $content = get_option('section3_description',true);
                                $editor_id = 'section3_description';
                                wp_editor( $content, $editor_id,$settings = array('textarea_rows'=>5,'textarea_cols'=>50,'media_buttons'=>false) );
                                ?>
                             <br />
                          <label class="description" for="section3_description"><?php _e('Description.', 'ap'); ?></label>
					</td>
				   </tr> 
				    
				    <tr valign="top"><th scope="row"><?php _e('Button', 'ap'); ?></th>
					<td>
					    <input type="text" name="section3_btext" value="<?php echo get_option('section3_btext') ?>" size="50">
					     <br />
					    <label class="description" for="section3_btext"><?php _e('Text', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="section3_burl" value="<?php echo get_option('section3_burl') ?>" size="50">
					     <br />
					    <label class="description" for="section3_burl"><?php _e('Url', 'ap'); ?></label>
					</td>
				    </tr> 
				    			    
			 </table>
			   </fieldset>
		



			    <fieldset>
			      <legend><h2>Events Section</h2></legend>
				<table class="form-table boxed">
				   <tr valign="top"><th scope="row"><?php _e('Title', 'ap'); ?></th>
					<td>					   
					     <input type="text" name="section4_title" value="<?php echo get_option('section4_title') ?>" size="50">
					     <br />
					    <label class="description" for="section4_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>					   
					     <input type="text" name="section4_content" value="<?php echo get_option('section4_content') ?>" size="50">
					     <br />
					    <label class="description" for="section4_content"><?php _e('Subheading', 'ap'); ?></label>
					</td>
				   </tr> 
				    
				    <tr valign="top"><th scope="row"><?php _e('Button', 'ap'); ?></th>
					<td>
					    <input type="text" name="section4_btext" value="<?php echo get_option('section4_btext') ?>" size="50">
					     <br />
					    <label class="description" for="section4_btext"><?php _e('Text', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="section4_burl" value="<?php echo get_option('section4_burl') ?>" size="50">
					     <br />
					    <label class="description" for="section4_burl"><?php _e('Url', 'ap'); ?></label>
					</td>
				    </tr> 
				    <tr valign="top"><th scope="row">Image 1</th>
					<td>
					    <input type="text" name="section4_imagetitle1" value="<?php echo get_option('section4_imagetitle1') ?>" size="50">
					     <br />
					    <label class="description" for="section4_imagetitle1"><?php _e('Image Title', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'section4_image1', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr>
				    <tr valign="top"><th scope="row">Image 2</th>
					<td>
					    <input type="text" name="section4_imagetitle2" value="<?php echo get_option('section4_imagetitle2') ?>" size="50">
					     <br />
					    <label class="description" for="section4_imagetitle2"><?php _e('Image Title', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'section4_image2', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr>
				    <tr valign="top"><th scope="row">Image 3</th>
					<td>
					    <input type="text" name="section4_imagetitle3" value="<?php echo get_option('section4_imagetitle3') ?>" size="50">
					     <br />
					    <label class="description" for="section4_imagetitle3"><?php _e('Image Title', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'section4_image3', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr>
				    <tr valign="top"><th scope="row">Image 4</th>
					<td>
					    <input type="text" name="section4_imagetitle4" value="<?php echo get_option('section4_imagetitle4') ?>" size="50">
					     <br />
					    <label class="description" for="section4_imagetitle4"><?php _e('Image Title', 'ap'); ?></label>
					</td>
					<td>
					  <?php 
		 				riverside_image_uploader( 'section4_image4', $width = 50, $height = 50 );
		 			 ?>
			 		</td>			 		
				   </tr>

				    			    
			 </table>
			   </fieldset>
 <fieldset>
			      <legend><h2>Blog Section</h2></legend>
				<table class="form-table boxed">
				   <tr valign="top"><th scope="row"><?php _e('Title', 'ap'); ?></th>
					<td>					   
					     <input type="text" name="section5_title" value="<?php echo get_option('section5_title') ?>" size="50">
					     <br />
					    <label class="description" for="section5_title"><?php _e('Title', 'ap'); ?></label>
					</td>
					<td>					   
					     <input type="text" name="section5_content" value="<?php echo get_option('section5_content') ?>" size="50">
					     <br />
					    <label class="description" for="section5_content"><?php _e('Subheading', 'ap'); ?></label>
					</td>
				   </tr> 
				 
				    			    
			 </table>
			   </fieldset>
			
	<div align="center" style="margin-top:20px;"><input type="submit" value="Save" class="button-primary"></div>
                   </form>
                </div> <!-- end post-body-content -->
            </div> <!-- end post-body -->
        </div> <!-- end poststuff -->
    </div>
 <script type="text/javascript">
		 	// The "Upload" button
				$('.upload_image_button').click(function() {
				    var send_attachment_bkp = wp.media.editor.send.attachment;
				    var button = $(this);
				    wp.media.editor.send.attachment = function(props, attachment) {
				        $(button).parent().prev().attr('src', attachment.url);
				        $(button).prev().val(attachment.id);
				        wp.media.editor.send.attachment = send_attachment_bkp;
				    }
				    wp.media.editor.open(button);
				    return false;
				});
				// The "Remove" button (remove the value from input type='hidden')
				$('.remove_image_button').click(function() {
				    var answer = confirm('Are you sure?');
				    if (answer == true) {
				        var src = $(this).parent().prev().attr('data-src');
				        $(this).parent().prev().attr('src', src);
				        $(this).prev().prev().val('');
				    }
				    return false;
				});
			</script>	


<?php 	}


function register_home_settings(){
    //banner section
   register_setting(
	'homepage_info', // settings section
	'sec1_title' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec1_content' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec1_url' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec1_image' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'sec2_title' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec2_content' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec2_url' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec2_image' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'sec3_title' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec3_content' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec3_url' // setting name
    );
   register_setting(
	'homepage_info', // settings section
	'sec3_image' // setting name
    );

   //product section
   register_setting(
	'homepage_info', // settings section
	'section2_title' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'section2_content' // setting name
    );    
     register_setting(
	'homepage_info', // settings section
	'section2_btext' // setting name
    );    
     register_setting(
	'homepage_info', // settings section
	'section2_burl' // setting name
    );

     //discount section
      register_setting(
	'homepage_info', // settings section
	'section3_description' // setting name
    );
     register_setting(
    'homepage_info', // settings section
	'section3_btext' // setting name
    );
     register_setting(
	'homepage_info', // settings section
	'section3_burl' // setting name
    );

     //events section

	register_setting(
	'homepage_info', // settings section
	'section4_title' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'section4_content' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'section4_btext' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'section4_burl' // setting name
    );     	
    
    register_setting(
	'homepage_info', // settings section
	'section4_imagetitle1' // setting name
    );  
    register_setting(
	'homepage_info', // settings section
	'section4_image1' // setting name
    ); 

    register_setting(
	'homepage_info', // settings section
	'section4_imagetitle2' // setting name
    );  
    register_setting(
	'homepage_info', // settings section
	'section4_image2' // setting name
    );
      register_setting(
	'homepage_info', // settings section
	'section4_imagetitle3' // setting name
    );  
    register_setting(
	'homepage_info', // settings section
	'section4_image3' // setting name
    );
      register_setting(
	'homepage_info', // settings section
	'section4_imagetitle4' // setting name
    );  
    register_setting(
	'homepage_info', // settings section
	'section4_image4' // setting name
    );

    //blog section

	register_setting(
	'homepage_info', // settings section
	'section5_title' // setting name
    );
    register_setting(
	'homepage_info', // settings section
	'section5_content' // setting name
    );
    
    
    
   
    
    
           
}

add_action('admin_init', 'register_home_settings');

function my_home_setting() { 

add_submenu_page( 'themes.php', 'Home page Setting', 'Home Page Setting', 'manage_options', 'homepage_info', 'home_page_information');
//add_submenu_page('themes.php', 'our mission', 'Our Mission', 'manage_options', 'our_mission', 'our_mission');

}

add_action('admin_menu', 'my_home_setting');

