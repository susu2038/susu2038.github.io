<?php
include 'Calendar.php';
$calendar = new Calendar('2021-12-2');
$calendar->add_event('Birthday', '2021-12-26', 1, 'green');
$calendar->add_event('Meeting', '2021-12-28', 1, 'red');
$calendar->add_event('Holiday', '2021-12-06', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>