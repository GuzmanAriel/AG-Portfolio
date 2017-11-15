<?php

$GLOBALS['bodyClass'] = $bodyClass;



add_theme_support( 'post-thumbnails' );
add_image_size( 'large', 1200, 600, true );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'alt-thumb', 400, 300, true ); // Hard Crop Mode
add_image_size( 'featured', 1200, 800, false ); // Hard Crop Mode

function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '... <a class="full-post" href="'.get_the_permalink().'" rel="nofollow">Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );





// Google Analytics
function insert_head() {
?>
<!DOCTYPE html>
<!--[if lte IE 9]>
<html lang="en" class="lte-ie9">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ariel Guzman</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta name="description" content="One-page responsive VC HTML template">
  <meta name="keywords" content="template, clean, responsive, one-page, creative, vc">
  <meta name="author" content="Ariel Guzman">

  <!-- Place favicon.ico in the root directory-->

  <!-- Animate.css-->
  <link rel="stylesheet" href="/styles/animate.min.css">

  <!-- Normalize CSS-->
  <link rel="stylesheet" href="/styles/normalize.css">

  <!-- Magnific Popup-->
  <link rel="stylesheet" href="/plugins/magnific-popup/magnific-popup.css">

  <!-- Owl carousel-->
  <link rel="stylesheet" href="/plugins/owl-carousel/owl.carousel.css">

  <!-- Font Awesome-->
  <link rel="stylesheet" href="/styles/font-awesome.min.css">

  <!-- Google Fonts-->
  <link href="http://fonts.googleapis.com/css?family=Roboto+Mono:400,400italic,700italic,700%7CNothing+You+Could+Do" rel="stylesheet">

  <!-- Main Stylesheet-->
  <link rel="stylesheet" id='main-css' type="text/css" media="all" href="/styles/main.css"/>

</head>

<?php
}
add_action( 'wp_head', 'insert_head' );


function insert_footer() {
?>
</div>

<!-- jQuery-->
<script src="/scripts/jquery.min.js"></script>

<!-- Instafeed-->
<script src="/plugins/instafeed/instafeed.min.js"></script>

<!-- Google Maps API-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Magnific Popup-->
<script src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- One Page Nav-->
<script src="/plugins/one-page-nav/jquery.nav.js"></script>

<!-- Owl Carousel-->
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- Shuffle-->
<script src="/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>

<!-- Twitter Fetcher-->
<script src="/plugins/twitter-fetcher/twitterFetcher_min.js"></script>

<!-- Validate-->
<script src="/plugins/jquery-validate/jquery.validate.min.js"></script>

<!-- WOW-->
<script src="/plugins/wowjs/wow.min.js"></script>

<!-- Main Scripts-->
<script src="/scripts/main.js"></script>
<!--tracking visitors-->
          <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-66260937-1', 'auto');
            ga('send', 'pageview');

          </script>

</body>

</html>

<?php }
add_action( 'wp_footer', 'insert_footer' );

?>
