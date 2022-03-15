<?php
$Str1 = 'National';
$Str2 = 'Nationel';

$pos = strspn($Str1 ^ $Str2, "\0");

echo $Str1[$pos]." in String1, and ".$Str2[$pos]." in String2 <br>";
?>