<!DOCTYPE html>
<html>
<body>

<?php

echo "loop.)  <br>"; 
$N = 1;

$arr = array(3,4,-2,6,10,10,15,-16,-30,15);
$count =count($arr);
$max=0;
for($z=0; $z<$count; $z++){
    for ($i=0; $i<=$count; $i++) { 
        $sum = 0;
	        for($x=$z; $x<$i; $x++){
        
                $sum += $arr[$x];
                echo $arr[$x]." ";
                
            }
    
            echo "==>". $sum."<br>";
         
            if($sum >$max){
             $max = $sum ;
            $S = $x;


         }
         
    }
}
echo("From".$S."MAX :".$max)

?>

</body>
</html>