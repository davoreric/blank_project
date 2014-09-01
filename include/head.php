<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Static project</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<?php front_assets::add_css("global.css"); ?>

<script src="<?php echo $document_root ?>app/vendor/modernizr/modernizr.js"></script>
<script>
	Modernizr.mq('only all') || document.write('<script src="<?php echo $document_root ?>app/vendor/respond/dest/respond.min.js?v=v1.1"><\/script>');
</script>


<?php echo front_assets::render_css(); ?>