<? // settings.php 




// * timezone and date settings
    $timezone_identifier = "Europe/London";
     date_default_timezone_set($timezone_identifier);
     date_default_timezone_get($timezone_identifier);
    


    /**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */

 


define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'fastmot');
define('DB_USER', 'root');
define('DB_PASS', 'root');



 // Local
 
//define('DB_TYPE', 'mysql');
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'fastmot');
//define('DB_USER', 'adem');
//define('DB_PASS', 'kungfu12#!');

// Remeote

// define('DB_TYPE', 'mysql');
// define('DB_HOST', 'localhost');
// define('DB_USER', 'deewan84_adem');
// define('DB_PASS', 'Kungfu12#!');
// define('DB_NAME', 'deewan84_fastmot');



// error settings (from php.ini)
ini_set("display_errors", TRUE);
ini_set("error_reporting", E_ALL);
// these will need to be turned off when you publish your site


// Other Files Required to set up the application
require_once ('paths.php');


?>