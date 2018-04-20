<?php

	$gewicht = $_REQUEST["gewicht"];
	$lengte = $_REQUEST["lengte"];

	$lengte = $lengte / 100;

	$bmi = $gewicht / ($lengte * 2);

	echo $bmi;

?>
