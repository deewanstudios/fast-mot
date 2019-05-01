<?

	// paths.php
 
// this file is responsible for including any common paths
// which will be used...they will be stored as constants

define("DS", DIRECTORY_SEPARATOR);

// define the root of the project

define("ROOT", dirname(__DIR__). DS);

// define("FILE_ROOT", dirname(__FILE__). DS);

define("BR", "<br/>");

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


// dirname(__FILE__) finds the path to the folder which the current file is in (ie the config folder)
// dirname(dirname(__FILE__)) finds the folder which the config folder is in (ie the root folder)



// set up the paths...

define("APP", ROOT. "application".DS);
define("IMAGES", URL. "images/");
define("CONTROLLERS", ROOT."controllers".DS);
define("MODELS", ROOT."models".DS);
define("LIBS", ROOT."libs".DS);
define("VIEWS", ROOT."views".DS);
define("CONFIG", ROOT."configuration".DS);

// echo ROOT;
// 
// // echo BR. FILE_ROOT;
// 
// echo BR. APP;
// 
// echo BR. CONTROLLERS;
// 
// echo BR. VIEWS;
// 
// echo BR. MODELS;
// 
// echo BR. CONFIG;


?>