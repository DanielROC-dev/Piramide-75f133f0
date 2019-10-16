<?php
echo "hoeveel ster moet je neef" . PHP_EOL;
$aantal = readline(); 
if (is_numeric($aantal)){
 for ($x = 1; $x <= $aantal; $x++) 
 {
	 for($x2 = 1; $x2 <= $x; $x2++ ) 
    { 
		echo "*";
	}
	echo PHP_EOL;
 }
}
else
{
	echo "je moeder" . PHP_EOL;
	exit();
}

?>
