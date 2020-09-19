<?php
/*
Plugin Name: Mozart Plugin Autoloader Bug Example
Author: Mark Jaquith
*/

namespace MarkJaquith\MozartFileAutoloaderBug;

use MarkJaquith\MozartFileAutoloaderBug\Mozart\DI;

require __DIR__ . '/vendor/autoload.php';

add_action('init', function() {
	// This is a **function** that is included by DI in a functions.php file
	// and specified as a composer file autoloader inside their composer.json.
	DI\factory();
});
