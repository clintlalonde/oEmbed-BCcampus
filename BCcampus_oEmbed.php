<<<<<<< HEAD
<?php
/*
	Plugin Name: BCcampus Enable oEmbed
	Plugin URI:
	Description: Enable BCcampus Kaltura Mediaspace oEmbed within your site.
	Version: 1.3
	Author: Tony Box/Clint Lalonde
	License: GPL2
*/

function BCcampus_kaltura_oembed() {
    wp_oembed_add_provider( 'https://video.bccampus.ca/id/*', 'https://video.bccampus.ca/oembed/', false );

}

add_action( 'init', 'BCcampus_kaltura_oembed' );
=======
<?php
/*
	Plugin Name: BCcampus Enable oEmbed
	Plugin URI:
	Description: Enable BCcampus Kaltura Mediaspace oEmbed within your site.
	Version: 1.3
	Author: Tony Box/Clint Lalonde
	License: GPL2
*/

function BCcampus_kaltura_oembed() {
    wp_oembed_add_provider( 'https://video.bccampus.ca/id/*', 'https://video.bccampus.ca/oembed/', false );

}

add_action( 'init', 'BCcampus_kaltura_oembed' );
>>>>>>> origin/master
