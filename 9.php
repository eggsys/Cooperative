<!doctype html>
<html>
<body>
    <?php


    

    $x = array(3,4,-2,6,10,10,15,-16,-30,15);
    $ArrSize = count($x);
    $ArrSizeRadnom = rand(10,15);

    $arr = array(); 
    
   

    for ($i=0; $i < $ArrSizeRadnom ; $i++) { 
        $value = rand(-100,100);
        $arr[$i] = $value;
    }
    echo("here your luck --> [");
    for ($i=0; $i <$ArrSize/*Radnom*/ ; $i++) { 
        
        echo($x[$i].",");
    }
    echo("]<br>");

    echo("now choose");

    //input start - last
echo("<br> <b>game start right now<b> <br>");
    $start = 5; 
    $z =1;
    echo("start=".$start."<br>");
    if ($start >=0 && $start<= $ArrSizeRadnom) {
        $last = 10;
        if ($last >=0 && $last<=$ArrSizeRadnom)   {
            echo("38<br>");

            for ($i=$start; $i <=$last ; $i++) { 
                //echo($start);
                $id = $i - 1;       // we need to put minus 1 because Human Position always count from 1 but Array is 0 so we need to put this minus
                echo($arr[$id].",");
                $point +=$arr[$id];
               

        }
        
    }

}
echo("<br>");
echo("point : ".$point);
    

?>


</body>
</html>