<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="apsc-boards-tabs" id="apsc-board-social-profile-settings">
    <div class="apsc-tab-wrapper">
        <!--Instagram-->
        <div class="apsc-option-outer-wrapper">
            <h4><?php _e('Instagram Feed', 'accesspress-instagram-feed') ?></h4>
            <div class="apsc-option-extra">
             
                <div class="apsc-option-inner-wrapper">
                    <label for='instagram_access_token'><?php _e('Instagram Access Token', 'accesspress-instagram-feed'); ?></label>
                    <div class="apsc-option-field">
                        <?php
                            if(isset($_GET['access_token'])){
                                $access_token = $_GET['access_token'];
                            }else if(isset($apif_settings['access_token']) && $apif_settings['access_token'] !=''){
                                $access_token = $apif_settings['access_token'];
                            }else{
                                $access_token = '';
                            }
                        ?>
                        <input type="text" name="instagram[access_token]" id='instagram_access_token' value="<?php echo esc_attr($access_token); ?>"/>
                        <div class="apsc-option-note">
                        <ul>
                            <li><?php _e('Click to get access token, then save it.'); ?></li>
                        </ul>
                        <?php $new_url = urlencode(admin_url('admin.php?page=if-instagram-feed')) . '&response_type=token'; ?>
                        <div id="login_with_instagram">
                                <a href="https://api.instagram.com/oauth/authorize/?client_id=54da896cf80343ecb0e356ac5479d9ec&scope=basic+public_content&redirect_uri=http://api.web-dorado.com/instagram/?return_url=<?php echo $new_url;?>">Get Access Token</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Instagram-->
    </div>
</div>
