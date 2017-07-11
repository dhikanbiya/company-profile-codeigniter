<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Error:404</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #6C7A89;
	margin: 40px;
	font-family: 'Lato', sans-serif;
	color: #fff;
	text-align: center;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #fff;
	background-color: transparent;		
	font-weight: normal;	
}

#container {
	margin-top: 150px;
	padding: 100px;		
}


</style>
</head>
<body>
	<div id="container">
		<?php ?>		
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html>