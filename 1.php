<!DOCTYPE html>
<html>
<body>

<?php

echo "1.) Min Max <br>"; 


$x = array(9,2,100,5,13,8,20);
$arrlength = count($x);
$min = $x[0];
$max = $x[0];


for($i = 0; $i < $arrlength; $i++) {
	if ($x[$i] < $min) {
		$min = $x[$i] ;
	}
}

for($i = 0; $i < $arrlength; $i++) {
	if ($x[$i] > $max) {
		$max = $x[$i] ;
	}
}
echo " <br> min result is ".$min;
echo " <br> max result is ".$max;



?>

</body>
</html>