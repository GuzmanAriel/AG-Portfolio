<?php

$GLOBALS['bodyClass'] = $bodyClass;

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Project' ),
                'singular_name' => __( 'Project' )
            ),
        'public' => true,
        'has_archive' => true,
				'rewrite' => array( 'slug' => 'project', 'with_front' => false ),
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields')
        )
    );
}

add_action( 'template_redirect', 'wpse_45164_redirect_project' );

function wpse_45164_redirect_project(){
    if ( ! is_singular( 'project' ) )
        return;

    wp_redirect( get_post_type_archive_link( 'project' ), 301 );
    exit;

}
add_theme_support( 'post-thumbnails' );
add_image_size( 'large', 1200, 600, true );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'alt-thumb', 400, 300, true ); // Hard Crop Mode
add_image_size( 'featured', 800, 600, true ); // Hard Crop Mode

function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '... <a class="full-post" href="'.get_the_permalink().'" rel="nofollow">Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Adds Time
function time_ago() {
	global $post;
	$date = get_post_time('G', true, $post);
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'year', 'themeblvd' ), __( 'years', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 30 , __( 'month', 'themeblvd' ), __( 'months', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 7, __( 'week', 'themeblvd' ), __( 'weeks', 'themeblvd' ) ),
		array( 60 * 60 * 24 , __( 'day', 'themeblvd' ), __( 'days', 'themeblvd' ) ),
		array( 60 * 60 , __( 'hour', 'themeblvd' ), __( 'hours', 'themeblvd' ) ),
		array( 60 , __( 'minute', 'themeblvd' ), __( 'minutes', 'themeblvd' ) ),
		array( 1, __( 'second', 'themeblvd' ), __( 'seconds', 'themeblvd' ) )
	);

	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}

	$current_time = current_time( 'mysql', $gmt = 0 );
	$newer_date = time();

	$since = $newer_date - $date;

	if ( 0 > $since )
		return __( 'sometime', 'themeblvd' );

	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];

		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}

	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];


	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'seconds', 'themeblvd' );
	}

	$output .= __(' ago', 'themeblvd');

	return $output;
}
// DO IT Baby!
add_filter('the_time', 'time_ago');


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
