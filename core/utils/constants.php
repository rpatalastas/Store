<?php 
//Root Directory
define('ROOT_DIR', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
//Core Directory
define('CORE_DIR', ROOT_DIR . 'core/');
//Database Directory
define('DB_DIR', CORE_DIR . 'database/');
//Functions Directory
define('FUNCTIONS_DIR', CORE_DIR . 'functions/');
//Includes Directory
define('INCLUDES_DIR', CORE_DIR . 'includes/');
//Utils Directory
define('UTILS_DIR', CORE_DIR . 'utils/')
 ?>