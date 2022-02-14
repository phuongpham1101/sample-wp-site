<?php
// Removal of un-needed WordPress admin functions.
require_once('functions/admin_tidyup.php');

// Setup of CSS/JS files being pulled into FED.
require_once('functions/enqueued_scripts.php');

// Setup of simple WordPress navs.
require_once('functions/nav.php');

// Added option for excerpt length and ending.
require_once('functions/excerpts.php');

// Setup file for Custom Post Types to be dropped into.
require_once('functions/custom_post_types.php');

// Setup of ACF Options page with general re-useable fields.
require_once('functions/acf_options.php');

// Setup file for custom functions
require_once('functions/custom_functions.php');