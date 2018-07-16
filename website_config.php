<?php

function website_information(){  
   wp_enqueue_script('post');
if ( user_can_richedit() )
    wp_enqueue_script('editor');
    add_thickbox(); 
    wp_enqueue_script('media-upload');
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
			<?php settings_fields('website_info'); ?>			
			    <fieldset>
			      <legend><h2>Main Info</h2></legend>
				<table class="form-table boxed">			 
				    
				 <tr valign="top"><th scope="row"><?php _e('Primary Phone Number', 'ap'); ?></th>
					<td>
					    <input type="text" name="phone_number1" value="<?php echo get_option('phone_number1') ?>" size="50">
					     <br />
					    <label class="description" for="phone_number1"><?php _e('Primary Phone Number', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="phone_number1_anchor" value="<?php echo get_option('phone_number1_anchor') ?>" size="50">
					     <br />
					    <label class="description" for="phone_number1_anchor"><?php _e('Primary Phone Number Anchor Link', 'ap'); ?></label>
					</td>
				 </tr> 
				    
				 <tr valign="top"><th scope="row"><?php _e('Secondary Phone Number', 'ap'); ?></th>
					<td>
					    <input type="text" name="phone_number2" value="<?php echo get_option('phone_number2') ?>" size="50">
					     <br />
					    <label class="description" for="phone_number2"><?php _e('Secondary Phone Number', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="phone_number2_anchor" value="<?php echo get_option('phone_number2_anchor') ?>" size="50">
					     <br />
					    <label class="description" for="phone_number2_anchor"><?php _e('Secondary Phone Number Anchor Link', 'ap'); ?></label>
					</td>
				  </tr>  
				 
				    
				  <tr valign="top"><th scope="row"><?php _e('Email Id', 'ap'); ?></th>
					<td>
					    <input type="text" name="website_email" value="<?php echo get_option('website_email') ?>" size="50">
					     <br />
					    <label class="description" for="website_email"><?php _e('Contact Email Id', 'ap'); ?></label>
					</td>
				  </tr> 


				  <tr valign="top"><th scope="row"><?php _e('Website Url', 'ap'); ?></th>
					<td>
					    <input type="text" name="website_url" value="<?php echo get_option('website_url') ?>" size="50">
					     <br />
					    <label class="description" for="website_url"><?php _e('Website Url', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="website_url_link" value="<?php echo get_option('website_url_link') ?>" size="50">
					     <br />
					    <label class="description" for="website_url_link"><?php _e('Website Link', 'ap'); ?></label>
					</td>
				  </tr> 

				   <tr valign="top"><th scope="row"><?php _e('Address', 'ap'); ?></th>
					<td>
					    <input type="text" name="address" value="<?php echo get_option('address') ?>" size="50">
					     <br />
					    <label class="description" for="address"><?php _e('Address', 'ap'); ?></label>
					</td>
				  </tr> 

				   <tr valign="top"><th scope="row"><?php _e('Opening Time', 'ap'); ?></th>
					<td>
					    <input type="text" name="opening_time1" value="<?php echo get_option('opening_time1') ?>" size="50">
					     <br />
					    <label class="description" for="opening_time1"><?php _e('Opening Time 1', 'ap'); ?></label>
					</td>
					<td>
					    <input type="text" name="opening_time2" value="<?php echo get_option('opening_time2') ?>" size="50">
					     <br />
					    <label class="description" for="opening_time2"><?php _e('Opening Time 2', 'ap'); ?></label>
					</td>
				  </tr> 
			 </table>
			   </fieldset>		

			   <fieldset>
			      <legend><h2>Footer Section</h2></legend>
				<table class="form-table boxed">				    
				    
				    <tr valign="top"><th scope="row"><?php _e('Footer 1 Title', 'ap'); ?></th>
					<td>
					    <input type="text" name="footer1_title" value="<?php echo get_option('footer1_title') ?>" size="50">
					     <br />
					    <label class="description" for="footer1_title"><?php _e('Footer 1 Title', 'ap'); ?></label>
					</td>
				    </tr> 
				    
				    <tr valign="top"><th scope="row"><?php _e('Footer 2 Title', 'ap'); ?></th>
					<td>
					    <input type="text" name="footer2_title" value="<?php echo get_option('footer2_title') ?>" size="50">
					     <br />
					    <label class="description" for="footer2_title"><?php _e('Footer 2 Title', 'ap'); ?></label>
					</td>					
				    </tr> 
				    
				    <tr valign="top"><th scope="row"><?php _e('Footer 3 Title', 'ap'); ?></th>
					<td>
					    <input type="text" name="footer3_title" value="<?php echo get_option('footer3_title') ?>" size="50">
					     <br />
					    <label class="description" for="footer3_title"><?php _e('Footer 3 Title', 'ap'); ?></label>
					</td>
				    </tr> 

				     <tr valign="top"><th scope="row"><?php _e('Footer 4 Title', 'ap'); ?></th>
					<td>
					    <input type="text" name="footer4_title" value="<?php echo get_option('footer4_title') ?>" size="50">
					     <br />
					    <label class="description" for="footer4_title"><?php _e('Footer 4 Title', 'ap'); ?></label>
					</td>
				    </tr> 

				    <tr valign="top"><th scope="row"><?php _e('Copy Right title', 'ap'); ?></th>
					<td>
					    <input type="text" name="copyright_title" value="<?php echo get_option('copyright_title') ?>" size="50">
					     <br />
					    <label class="description" for="copyright_title"><?php _e('Copy Right title', 'ap'); ?></label>
					</td>
				    </tr> 
				    
				    
			    
			 </table>
			   </fieldset>
			
			
			
			 <fieldset>
			      <legend><h2>Social Links</h2></legend>
			
                        <table class="form-table boxed">
			
			
                            <tr valign="top"><th scope="row"><?php _e('You Tube', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="youtube_link" value="<?php echo get_option('youtube_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="youtube_link"><?php _e('Youtube Link.', 'ap'); ?></label>
                                </td>
                            </tr>

                             <tr valign="top"><th scope="row"><?php _e('Facebook', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="facebook_link" value="<?php echo get_option('facebook_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="facebook_link"><?php _e('Facebook Link', 'ap'); ?></label>
                                </td>
                            </tr>

                            <tr valign="top"><th scope="row"><?php _e('Twitter', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="twitter_link" value="<?php echo get_option('twitter_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="twitter_link"><?php _e('Twitter Link', 'ap'); ?></label>
                                </td>
                            </tr>

                            <tr valign="top"><th scope="row"><?php _e('Instagram', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="instagram_link" value="<?php echo get_option('instagram_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="instagram_link"><?php _e('Instagram Link', 'ap'); ?></label>
                                </td>
                            </tr>

                            <tr valign="top"><th scope="row"><?php _e('Pinterest', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="pinterest_link" value="<?php echo get_option('pinterest_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="pinterest_link"><?php _e('Pinterest Link', 'ap'); ?></label>
                                </td>
                            </tr>  
			    
			     <tr valign="top"><th scope="row"><?php _e('Google Plus', 'ap'); ?></th>
                                <td>
                                    <input type="text" name="gplus_link" value="<?php echo get_option('gplus_link') ?>" size="50">
                                    <br />
                                    <label class="description" for="gplus_link"><?php _e('Google Plus Link', 'ap'); ?></label>
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



<?php 	}


function register_settings(){
   //main info   
    register_setting(
	'website_info', // settings section
	'phone_number1' // setting name
    );     
    register_setting(
	'website_info', // settings section
	'phone_number2' // setting name
    );
     register_setting(
	'website_info', // settings section
	'phone_number1_anchor' // setting name
    );
     register_setting(
	'website_info', // settings section
	'phone_number2_anchor' // setting name
    );    
     
    register_setting(
	'website_info', // settings section
	'website_email' // setting name
    );
    
    register_setting(
	'website_info', // settings section
	'website_url' // setting name
    ); 
     register_setting(
	'website_info', // settings section
	'website_url_link' // setting name
    );    
    register_setting(
	'website_info', // settings section
	'address' // setting name
    );
    register_setting(
    'website_info',
    'opening_time1'
    );
    register_setting(
    'website_info',
    'opening_time2'
    );

    //footer title
    
    register_setting(
	'website_info', // settings section
	'footer1_title' // setting name
    );
    register_setting(
	'website_info', // settings section
	'footer2_title' // setting name
    );         
    register_setting(
	'website_info', // settings section
	'footer3_title' // setting name
    );
     register_setting(
	'website_info', // settings section
	'footer4_title' // setting name
    );
     register_setting(
	'website_info', // settings section
	'copyright_title' // setting name
    );
    
    //social icons
           
    register_setting(
	'website_info', // settings section
	'youtube_link' // setting name
    );
   register_setting(
	'website_info', // settings section
	'facebook_link' // setting name
    );
    register_setting(
	'website_info', // settings section
	'twitter_link' // setting name
    );      
     register_setting(
	'website_info', // settings section
	'instagram_link' // setting name
    );
      register_setting(
	'website_info', // settings section
	'pinterest_link' // setting name
    );
       register_setting(
	'website_info', // settings section
	'gplus_link' // setting name
    ); 
           
}

add_action('admin_init', 'register_settings');

function my_plugin_menu() { 

add_submenu_page( 'themes.php', 'website info', 'Website Info', 'manage_options', 'website_info', 'website_information');
//add_submenu_page('themes.php', 'our mission', 'Our Mission', 'manage_options', 'our_mission', 'our_mission');

}

add_action('admin_menu', 'my_plugin_menu');

