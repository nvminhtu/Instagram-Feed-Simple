<?php 
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Instagram Setup Information</h3>

	<table class="form-table">

		<tr>
			<th><label for="insta_username">Instagram Username</label></th>

			<td>
				<input type="text" name="insta_username" id="insta_username" value="<?php echo esc_attr( get_the_author_meta( 'insta_username', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Instagram username.</span>
			</td>
		</tr>
		<?php
				/*
		<tr>
			<th><label for="insta_acess_token">Instagram Access Token</label></th>
			<td>
				
				 	//check value is existed or not
				 	$insta_access_token = get_the_author_meta( 'insta_access_token', $user->ID );
                    if(isset($_GET['access_token'])){
                        $access_token = $_GET['access_token'];
                    } else if(isset($insta_access_token) && $insta_access_token !=''){
                        $access_token = $insta_access_token;
                    } else{
                        $access_token = '';
                    }
                
				 <input type="text" name="insta_access_token" id="insta_access_token" value="<?php echo esc_attr($access_token); ?>" class="regular-text" /><br />
			
					//get Admin URL
					$uri = $_SERVER['REQUEST_URI'];
					$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
					$admin_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					//mtcode: instagram link
				?>
				<span class="description">Please enter your Instagram Access Token.</span>
				<?php /* <div id="login_with_instagram"><a href="https://api.instagram.com/oauth/authorize/?client_id=54da896cf80343ecb0e356ac5479d9ec&amp;scope=basic+public_content&amp;redirect_uri=http://api.web-dorado.com/instagram/?return_url=<?php echo $admin_url; ?>&response_type=token">Click to get Access Token</a><span class="description"> (instagram access token)</span>
				</div> 
			</td>
		</tr>
		*/ ?>	
	</table>
<?php } 

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_usermeta( $user_id, 'insta_username', $_POST['insta_username'] );
	//update_usermeta( $user_id, 'insta_access_token', $_POST['insta_access_token'] );
}

?>