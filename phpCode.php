<?php

$m=null;
$n="50";
if($m??$n){
    printf("%o",$m=11);
}else{
    echo $n;
}


/*
$arr=array(10,20,30,40,50);
$arr=array_diff($arr,[40]);
print_r($arr);
*/

/*
$res =0;
$res=sprintf(printf("%x",printf("PHP examination")));
echo $res
*/

/*
$x="ABC";
$$x=200;
echo $x;
echo $$x;
echo $abc;
*/

/*
// Find The Greatest ELEMENT among 3 elements
$a=10;
$b=20;
$c=30;
/*
if($$a>b && $a>$c){
    echo $a;
}else if($b>$a && $b>$c){
    echo $b;
}else{
    echo $c;
}

echo ($a>$b) ? (($a>$c)?$a:$c) : (($b>$c)? $b :$c);
*/

/*

factorialCount(5);
// factorial count
function factorialCount($num){
    $result=1;
    while($num>=1){
        $result*=$num;
        $num--;
    }
    echo $result;
}
*/

/*
//PHP FUNCTIONS
//to add
// public static int add(int a, int b){}
// Math.add(a,b);// Pre Defined
$a=5;
$b=10;
add($a,$b);// calling of the function
//function create
function add($a, $b){
    echo $a+$b;
}
*/


/*
$colors=array("red", "green", "blue", "yellow");

$size=sizeof($colors);
for($i=0;$i<$size;$i++){

}

foreach ($colors as $value) {
    //check green color
    if($value=="green"){
        echo "Found ";
        break;
    }else{
        continue;
    }
}
*/

/*
//LOOP
//While-loop
$num=1;
while($num<=5){
    echo $num."<br>";
    $num++;
}
*/

/*
//Switch case
$a=5;
$b=10;
$operation_to_be_perform="DIVIDE";
switch ($operation_to_be_perform){
    case "ADD":
        echo $a+$b;
        break;
    case "SUBTRACT":
        echo $a-$b;
        break;
    case "MULTIPLY":
        echo $a*$b;
        break;
    case "DIVIDE":
        echo $a/$b;
        break;
    default:
        echo "Operation can't be performed";
}

*/

//$var=5;
//if($var%2==0){
  //  echo "Number of Even";
//}else{
  //  echo "Number is Odd";
//}

//define("GREETING", "Welcome to W3Schools.com!",true);
//echo greeting;
//$string ="The quick brown fox jumps over the lazy dog";
//echo strpos("$string","jumps");
//echo strlen($string);
//echo str_word_count($string);
//echo strrev($string);
//echo strpos("$string","YADAV");
//$string=str_replace("MY","I","$string");
//echo str_replace("NAME","AM","$string");
//echo ("$string");

// int [] ar= new int[size];
//int []arr={"gya","GDUD"};
//$arr= array("ram","shyam");
//var_dump($arr);
/*
$num=1323;
$name="Gyan";
$x = 10.365;
var_dump($x)."<br>";
var_dump($num)."<br>";
var_dump($name)."<br>";
*/

/*
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
*/

/*
 * // o/p>> My name is Sejal Bansal
 $var="Sejal";
echo " My name is $var Bansal"."<br>";
echo "My Name is ".$var." Bansal";
// System.out.println("Hello"+______);
 */

/*
    $a=0;
    $a=5>2? print("4"):3;
    print($a);
    */
?>

