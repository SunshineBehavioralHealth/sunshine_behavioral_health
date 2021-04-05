<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<?php
	$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, 'dev.') !== false) :	?>
		<meta name="robots" content="noindex, nofollow" />
	<?php endif; ?>



	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php echo get_field('meta') ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Google Data Layer -->
	<?php get_template_part('template-parts/javascript/googleDataLayerJs'); ?>

	<!-- Google Tag Manager -->
	<script async>
		setTimeout(function() {
			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-5PQWDKH');
		}, 1000);
	</script>

	<!-- End Google Tag Manager -->




	<meta name="geo.placename" content="30950 Rancho Viejo Rd #225, San Juan Capistrano, CA 92675, USA">
	<meta name="geo.position" content="33.514220, -117.661810">
	<meta name="geo.region" content="US-California">
	<meta name="ICBM" content="33.514220, -117.661810">

	<meta name="google-site-verification" content="LPFohOe1SYTmoaut8DfM0cTm2D0rxvnIQm54p4Vq1Do" />
	<meta name="google-site-verification" content="Ad6M8-oh_QVolRBUpNL0KdnUjulfdDNBmFHYF8gvuOA" />
	<meta name="google-site-verification" content="CYoHznIknfoVOHM78G4agdDcXIEswDI24IVZ1EU35A8" />
	<meta name="google-site-verification" content="w4ynFJTjoTN5wAQDL8_bjWVJ2S92XC_26QnWdK_P8k0" />
	<meta name="robots" content="max-iamge-preview:large" />






	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PQWDKH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->



	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<?php get_template_part('template-parts/header/navigation'); ?>


		</header><!-- #masthead -->