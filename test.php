<!doctype html>
<html>
<body>
<center>
<b> Gold or</b>
</center>

<form action="test.php" method="get">
Game operator name here : <input type ="text" name="opname" placeholder="name"><br>    
How many coin you need to give him ?: <input type="number" name="size" min="1"><br>

<input type="submit">
</form>









    <?php








    
// How many coin here
$opname = $_GET["opname"];
$ArrSizeFixed = $_GET["size"];
echo("Operator name :".$opname."<br>");
echo("size= ".$ArrSizeFixed."<br>");
$ArrSizeRadnom = rand(10, 15);
$arr = array();

// How many coin here



for ($i = 0; $i < $ArrSizeFixed; $i++) {
    $value = rand(-100, 100);
    $arr[$i] = $value;
}
/*echo ("here your luck --> [");
for ($i = 0; $i < $ArrSizeFixed; $i++) {

    echo ($arr[$i] . ",");
}
*/
echo ("<br>");

echo ("<b>now choose !</b>");

//input start - last
$play = 'y';
switch ($play) {
    case 'y':

        echo ("<br> <b>game start right now</b> <br>");
        echo($opname." just give you ".$ArrSizeFixed." Coins choose wisely ..<br>");
?>

     <form action="test.php" method="get">
        where should we start ? : <input type="number" name="start" min="1"><br>    
        where you want to stop picking it ?: <input type="number" name="last" min="1"><br>




<?php

        $start = $_GET["start"];
        $last = $_GET["last"];
?>

<div class="play" <?php echo $style;?>>

<?php
        echo ("start=" . $start . "<br>");
        if ($start >= 0 && $start <= $ArrSizeFixed) {
            
            if ($last >= 0 && $last <= $ArrSizeFixed) {
                //echo ("38<br>");

                for ($i = $start; $i <= $last; $i++) {
                    //echo($start);
                    $id = $i - 1; // we need to put minus 1 because Human Position always count from 1 but Array is 0 so we need to put this minus
                    echo ($arr[$id] . ",");
                    $point += $arr[$id];

                }

            }else{
              echo("hey you have only".$ArrSizeFixed." coins here");
              $play = 'y';
            }
        }else{ echo("hey ! your coin start at .".$ArrSizeFixed);
              $play = 'y';
    }

        echo ("<br>");
        echo ("your point : " . $point);
        echo ("<br> this is what ".$opname." give you <br>");
        for ($i = 0; $i < $ArrSizeFixed; $i++) {

            echo ($arr[$i] . ",");
        }
        ?>
   <div>
<?php     
}

?>
</body>
</html>