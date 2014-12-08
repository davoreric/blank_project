<?php

// edit here to modify project URL
$document_root = '';

// CONFIG/INCLUDE AREA
include $document_root . 'lib/vendor/dispatch/dispatch/src/dispatch.php';

include_once $document_root . "lib/getUrl.php";
include_once $document_root . "lib/outerTemplateLoader.php";
include_once $document_root . "lib/front_assets.php";
include_once $document_root . "lib/components.php";

config('dispatch.url', $document_root);
config('dispatch.router', 'index.php');

// USER DEFINED ROUTES

on('GET', '/', function ($document_root) {
	outerTemplate("mainpage/homepage");
});

on('GET', '/home', function ($document_root) {
	outerTemplate("mainpage/homepage");
});

// USER DEFINED API ROUTES

on('GET', '/api', function ($document_root) {

	$type = $_GET['type'];

	outerBlank($type);

});


// ERROR HANDLING

error(404, function () {

	outerTemplate("misc/404");
	
});


// GENERATE PAGE

dispatch();

?>