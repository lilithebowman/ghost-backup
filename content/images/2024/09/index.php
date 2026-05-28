<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LilitheBowman.com - Lil's Hobbies &amp; Work</title>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<script>
		const siteData = "<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
        // allow all origins
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");     

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
}

/** Include the bootstrap for setting up WordPress environment */
$__DIR__ = "../blog/";
require_once $__DIR__ . '/wp-load.php';

$args = array(
  'numberposts' => 255
);

$latest_posts = get_posts( $args );



foreach( $latest_posts as $key => $post ) {
        $latest_posts[$key]->media = $media = get_attached_media( 'image', $post->ID );
}

echo json_encode($latest_posts); ?>";
		export default siteData;
	</script>
</head>

<body>
	<div id="root"></div>
	<script type="module" src="/src/main.tsx"></script>
</body>

</html>