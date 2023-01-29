<?php
/**
 * Plugin Name:   updaterdark
 * Plugin URI:    https://github.com/DarksydeTech/updaterdark
 * Description:   SEO-friendly Table of Contents Gutenberg block. No JavaScript and no CSS means faster loading.
 * Version:       0.1.5
 * Author:        Andre
 * Author URI:    https://github.com/DarksydeTech/updaterdark
 * Text Domain:   updaterdark
 * License: GPL   v2 or later
 * License URI:   http://www.gnu.org/licenses/gpl-2.0.html
 *
 */
require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'DarksydeTech', "updaterdark" );
}

?>