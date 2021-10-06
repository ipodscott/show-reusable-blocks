<?php

/*
Plugin Name: Show Reusable Blocks
Plugin URI: https://scottsaunders.design
Description: Display reusable blocks from the WordPress plugins
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/

// Show Reusable Blocks from the backend
function add_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-controls-repeat', 22 );
}
add_action( 'admin_menu', 'add_reusable_blocks_admin_menu' );