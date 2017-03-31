<?php
defined('ABSPATH') or die("No script kiddies please!");
$apif_settings = get_option( 'apif_settings' );
    //$this->print_array($apsc_settings);
?>
<div class="wrap">
    <div class="apsc-add-set-wrapper clearfix">
        <div class="apsc-panel">
           
            <?php if(isset($_SESSION['apif_message'])){?><div class="apsc-success-message"><p><?php echo $_SESSION['apif_message'];unset($_SESSION['apif_message']);?></p></div><?php }?>

            <div class="apsc-boards-wrapper">
                <ul class="apsc-settings-tabs">
                    <li><a href="javascript:void(0)" id="social-profile-settings" class="apsc-tabs-trigger apsc-active-tab"><?php _e('Instagram Profiles', 'accesspress-instagram-feed') ?></a></li>

                </ul>

                <div class="metabox-holder">
                    <div id="optionsframework" class="postbox" style="float: left;">
                        <form class="apsc-settings-form" method="post" action="<?php echo admin_url() . 'admin-post.php' ?>">
                            <input type="hidden" name="action" value="apif_settings_action"/>
                        <?php
                        /**
                         * Social Profiles
                         * */
                        include_once('boards/instagram-profiles.php');
                        ?>

                        <?php
                        /**
                         * Display Settings
                         * */
                        include_once('boards/display-settings.php');
                        ?>

                        <?php
                        /**
                         * Captcha Settings
                         * */
                        include_once('boards/how-to-use.php');
                        ?>

                        <?php
                        /**
                         * About Tab
                         * */
                        include_once('boards/about.php');
                        ?>
                        <?php
                        /**
                         * Nonce field
                         * */
                        wp_nonce_field('apif_settings_action', 'apif_settings_nonce');
                        ?>
                        <div id="optionsframework-submit" class="ap-settings-submit">
                            <input type="submit" class="button button-primary" value="Save all changes" name="ap_settings_submit"/>
                        </div>
                    </form>
                    </div><!--optionsframework-->
                </div>
        </div>
</div>
</div>
</div><!--div class wrap-->