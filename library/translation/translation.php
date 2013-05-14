<?php
/* Welcome to PolyMaster :)
Thanks to the fantastic work by PolyMaster users, we've now
the ability to translate PolyMaster into different languages.

Developed by: Jeff Soule
URL: http://wahmaster.com/polymaster/
*/



// Adding Translation Option
load_theme_textdomain( 'polymaster', get_template_directory() .'/library/translation' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/library/translation/$locale.php";
if ( is_readable($locale_file) ) require_once($locale_file);








?>