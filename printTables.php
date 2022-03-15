<?php
// intializing table tag
    echo "<table border ='2px black' bgcolor='blue'>";
    echo"<tr style='background-color: aqua'>";
        for($table=1;$table<=20;$table++){
            echo"<td>";
            for($number=1;$number<=10;$number++){
                echo "$table"."*"."$number"."=".$number*$table."<br>";
            }
            echo "</td>";
        }
    echo "</table>";
?>