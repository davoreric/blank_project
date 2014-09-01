<?php

// edit here to modify project URL
$document_root = '';


// CONFIG/INCLUDE AREA

include $document_root . 'lib/vendor/dispatch/dispatch/src/dispatch.php';
include_once $document_root . "lib/front_assets.php";

config('dispatch.url', $document_root);
config('dispatch.router', 'index.php');


// USER DEFINED ROUTES

on('GET', '/', function ($document_root) {
	include $document_root . "templates/controllers/homepage.php";
});

on('GET', '/home', function ($document_root) {
	include $document_root . "templates/controllers/homepage.php";
});

on('GET', '/contact', function ($document_root) {
	include $document_root . "templates/controllers/contact.php";
});


// ERROR HANDLING

error(404, function () {
	global $document_root;
	include $document_root . "templates/controllers/404.php";
});


// GENERATE PAGE

dispatch();

?>