<!DOCTYPE html>
<html>
<head>
<title>Two Strings</title>
</head>
<body>
<h1>Exercise 1</h1>
<h2>Two Strings</h2>

<form method="post" 
	<p>
	1. Утре времето ще бъде слънчево. </br>
	2. Утре се очаква затопляне на времето.</p>
</form>

<?php
	$str = "Утре времето ще бъде слънчево.";
	$str2 = "Утре се очаква затопляне на времето.";
	echo "Дължина на първия низ- ".strlen($str)."</br>";
	echo "Дължина на втория низ- ".strlen($str2)."</br>";
	echo "Думата 'времето' в първия низ се 
	намира на ".strpos($str, "времето")." позиция </br>";

	echo "Заместване на думата 'затопляне' с 'застудяване' -> ".(str_replace("затопляне", "застудяване", $str2))."</br>";
	echo "Сравняване на двата низа: ".(strcasecmp($str, $str2))."</br></br>";
	echo "Разделя двата низа на части, като разделител е space: </br> ";
	echo "Низ 1: </br>";
	$token = strtok($str, " ");
	while ($token !== false){
	echo "$token<br>";
	$token = strtok(" ");}
	 
	echo " </br> Низ 2: </br>";
	$token = strtok($str2, " ");
	while ($token !== false){
	echo "$token<br>";
	$token = strtok(" ");}
?>
</body>
</html>