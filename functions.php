<?php
/**
 * Theme includes
 */
require_once locate_template('/inc/init.php'); 		// Initial theme setup and constants

require_once locate_template('/inc/utils.php');		// Utility functions

require_once locate_template('/inc/config.php');          // Configuration

require_once locate_template('/inc/sidebar.php');         // Sidebar class

require_once locate_template('/inc/scripts.php');         // Scripts and stylesheets

require_once locate_template('/inc/cleanup.php');         // Cleanup

require_once locate_template('/inc/nav.php');             // Custom nav modifications

require_once locate_template('/inc/comments.php');        // Custom comments modifications

require_once locate_template('/inc/widgets.php');         // Sidebars and widgets

require_once locate_template('/inc/rewrites.php');        // URL rewriting for assets
