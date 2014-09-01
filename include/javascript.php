<!--[if lt IE 9]>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script type="text/javascript" src="<?php echo $document_root ?>app/vendor/jquery-legacy/jquery.min.js"><\/script>')</script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php echo $document_root ?>app/vendor/jquery/dist/jquery.min.js"><\/script>')</script>
<!--<![endif]-->

<?php front_assets::add_js_vendor("vendors/dest/respond.min.js"); ?>
<?php front_assets::add_js_vendor("vendors/yepnope.js"); ?>
<?php front_assets::add_js_vendor("matchmedia/matchMedia.js"); ?>
<?php front_assets::add_js_vendor("matchmedia/matchMedia.addListener.js"); ?>
<?php front_assets::add_js_vendor("swipe/swipe.js"); ?>

<?php front_assets::add_js("app.js"); ?>

<?php echo front_assets::render_js(); ?>