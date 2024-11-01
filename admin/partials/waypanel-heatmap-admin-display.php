<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.waypanel.com
 * @since      1.0.0
 *
 * @package    Waypanel_Heatmap
 * @subpackage Waypanel_Heatmap/admin/partials
 */
//Grab all options
$options = get_option($this->plugin_name);
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <BR><BR>
    <h3>1 - Create your <a href="https://app.waypanel.com/register/" target="_blank">Waypanel Account</a></h3><BR><BR>


    <h3>2 - Paste your Waypanel tracking script here:</h3>
    <form method="post" name="cleanup_options" action="options.php">
        <?php settings_fields($this->plugin_name); ?>
        <!-- remove some meta and generators from the <head> -->
        <fieldset>
            <legend class="screen-reader-text">
            </legend>
            <label for="<?php echo $this->plugin_name; ?>-script">
                <textarea style="width:500px; height: 300px" id="<?php echo $this->plugin_name; ?>-script" name="<?php echo $this->plugin_name; ?>[script]"><?=$options['script']?></textarea>
                <!--<span><?php esc_attr_e('Waypanel Script', $this->plugin_name); ?></span>-->
            </label>
        </fieldset>


        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>
    <BR><BR>

    <h3>3 - Check the <a href="https://app.waypanel.com/admin/" target="_blank">Heatmaps and Recordings</a></h3><BR><BR>

    <BR><BR>
    <p>* <?php _e('Waypanel is a free heatmap and recordings tool. Enjoy!', $this->plugin_name);?></p>
</div>

