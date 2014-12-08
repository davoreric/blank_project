<?php

class front_assets {

	static $js_files = array();
	static $css_files = array();

	static function add_css_vendor( $file, $group = "_core" ){
		
		self::$css_files[$group][$file] = '<link href="/app/vendor/'. $file .'" rel="stylesheet" type="text/css" />' . PHP_EOL;

	}

	static function add_css( $file, $group = "_core" ){

		
		self::$css_files[$group][$file] = '<link href="/app/css/'. $file .'" rel="stylesheet" type="text/css" />' . PHP_EOL;

	}

	static function add_js_vendor( $file, $group = "_core" ){

		
		self::$js_files[$group][$file] = '<script src="/app/vendor/'. $file .'"></script>'. PHP_EOL;

	}

	static function add_js( $file, $group = "_core" ){

		
		self::$js_files[$group][$file] = '<script src="/app/js/'. $file .'"></script>'. PHP_EOL;

	}

	static function render_js(){

		ksort( self::$js_files );

		$files = '';

		foreach (self::$js_files as $group) {
			$files .= implode("", $group);
		}

		return $files;

	}

	static function render_css(){

		ksort( self::$css_files );

		$files = '';

		foreach (self::$css_files as $group) {
			$files .= implode("", $group);
		}

		return $files;

	}

}

?>