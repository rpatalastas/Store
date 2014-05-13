<?php 

//Root Directory
define('ROOT_DIR', $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]);
//Core Directory
define('CORE_DIR', ROOT_DIR . 'core/');
//Database Directory
define('DB_DIR', CORE_DIR . 'database/');
//Functions Directory
define('FUNCTIONS_DIR', CORE_DIR . 'functions/');
//Includes Directory
define('INCLUDES_DIR', CORE_DIR . 'includes/');
//Page Elements Directory
define('PAGE_ELEMENTS_DIR', INCLUDES_DIR . 'page_elements/');
//Utils Directory
define('UTILS_DIR', CORE_DIR . 'utils/');
//Images Directory
define('IMAGES_DIR', ROOT_DIR . 'images/');
//Javascript Directory
define('SCRIPTS_DIR', ROOT_DIR . 'javascript/');
//Pages Directory
define('PAGES_DIR', ROOT_DIR . 'pages/');
//Stylesheets Directory
define('STYLES_DIR', ROOT_DIR . 'stylesheets/');

 ?>