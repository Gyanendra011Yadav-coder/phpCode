<?php
echo "<table border='2px black' style='border-bottom-style: double' >";
for ($row=0;$row<8;$row++){
    echo "<tr>";
    for($column=0;$column<8;$column++){
        if(($row+$column)%2==0){
            echo"<td height='25 px' width='25 px' bgcolor='black'> </td>";
        }else{
            echo "<td height='25px' width='25px' bgcolor='white'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>"
?>
