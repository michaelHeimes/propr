<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KF5XVHJ');</script>
    <!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>

	<?php if( $icon = get_field('favicon', 'option') ): ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo $icon; ?>"/>
	<?php endif; ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();

	if( $GLOBALS['theme_invert_page'] ){
		add_filter('body_class', 'add_dark_class');
	} ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87624866-1', 'auto');
  ga('send', 'pageview');

</script>

<meta name="msvalidate.01" content="A8339A906B6B04581C7EA8D99290387E" />
<meta name="google-site-verification" content="sBqD07GSR5K9duj_cr_NPvRHRLSwHfKNk19dd56wUSA" />

</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5XVHJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header class="error site-header">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">propr</a>
                </div>
            </nav>
    </header>

    <div id="content">
