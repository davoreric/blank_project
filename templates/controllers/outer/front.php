<!DOCTYPE html>
<head lang="en">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Blank Project</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/app/vendor/modernizr/modernizr.js"></script>
    <script>
        Modernizr.mq('only all') || document.write('<script src="/app/vendor/respond/dest/respond.min.js?v=v1.1"><\/script>');
    </script>

    <?php front_assets::add_css_vendor("normalize.css/normalize.css"); ?>
    <?php front_assets::add_css("global.css"); ?>
    <?php echo front_assets::render_css(); ?>

</head>
<body>

    <?php echo $body ?>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script type="text/javascript" src="/app/vendor/jquery-legacy/jquery.min.js"><\/script>')</script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="/app/vendor/jquery/dist/jquery.min.js"><\/script>')</script>
    <!--<![endif]-->

    <?php front_assets::add_js_vendor("lateImages/dist/lateImages.min.js"); ?>

    <?php front_assets::add_js("library/global.js"); ?>
    <?php front_assets::add_js("library/mediaQueryHelper.js"); ?>

    <?php front_assets::add_js("app.js"); ?>

    <?php echo front_assets::render_js(); ?>

</body>
</html>