<!DOCTYPE html>
<html>
    <head>
        <title>"File"</title>
    </head>
    <body>
		<h1> Exercise 2 </h1>
		<fieldset>
		<legend> File Rectangle </legend>
	<?php
		define("fname","Rectangle.txt");
		 
		$file = fopen(fname, "w") or die("File can not open!");
		fwrite($file,"Правоъгълника има дължина и ");
		fclose($file);
		$file = fopen(fname, "a+") or die("File can not open!");
		fwrite($file,"ширина ");

		rewind($file);
		$fsize = filesize(fname);
		$fcontent = fread($file,$fsize);
		print("Съдържание на файла: " . $fcontent . "</br>");
		print("Размер на файла: " . $fsize);

		fclose($file);
	?> 
		</fieldset>
</body>
</html>