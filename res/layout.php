<?php
// Website Title, Header, and Footer options
$global_title = "The Dosmin Project";
$global_nav = ["index.php", "login.php"];
$global_css = ["res/css/reset.css", "res/css/style.css"];
$global_logo = 'res/logo.png';

// Header, CSS Linking, and Footer code
$global_header = '
	<div class="title"><img src="' . $global_logo . '">
		<h1>'. $global_title . '</h1></div>
	<nav>
		<a class="btn" href="'.$global_nav[0].'">Home</a>
		<a class="btn" href="'.$global_nav[1].'">Login</a>
	</nav>';
$global_css    = '
	<link rel="stylesheet" href="'.$global_css[0].'">
	<link rel="stylesheet" href="'.$global_css[1].'">';
$global_footer = '';

// Generates a layout around the output given.
function echoLayout($output, $t = "") {
	
	// If given a page title, it should be added to website title
	if ($t == "") {
		$pageTitle = $GLOBALS['global_title'];
	} else {
		$pageTitle = $GLOBALS['global_title'] . ": " . $t;
	}
	
	$h = $GLOBALS['global_header'];
	$f = $GLOBALS['global_footer'];
	$css = $GLOBALS['global_css'];

	echo '<!doctype html><html>
		<head>
			<meta charset="utf-8">
			<title>' . $pageTitle . '</title>'.$css.'
		</head>
		<body>
			<header>' . $h . '</header>
			<main><section>' . $output . '</section></main>
			<footer>' . $f . '</footer>
		</body>
	</html>';
}
