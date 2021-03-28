<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
        background-color:smokywhite;
        font-size:8px;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>
</head>
<body>
<?php
define('pi',3.14);
// arithmatic op
echo '<strong>arithmatic op</strong>';
echo'<br>';
$var1=10;
$var2=20;
echo $var1 + $var2;
echo "<br>";
echo'<hr>';
// comparison op return boolean values
// to use comparison op , we have to use var_dump() function
echo '<strong>comparison op</strong>";';
echo'<br>';
echo var_dump(1==4);
echo "<br>";
echo $var1++;
echo "<br>";
echo $var1--;
echo "<br>";
echo ++$var1;
echo "<br>";
echo --$var1;
echo "<br>";
echo'<hr>';
// logical op 
// and , or , xor, not
// and
echo '<strong>logical op</strong>";';
echo'<br>';
echo 'and';
echo'<br>';
$newvar=(true and true);
echo var_dump($newvar);
echo "<br>";
$newvar=(false and true);
echo var_dump($newvar);
echo "<br>";
$newvar=(false and false);
echo var_dump($newvar);
echo "<br>";
// or
echo 'or';
echo'<br>';
$newvar=(false or true);
echo var_dump($newvar);
echo "<br>";
// xor
// false and true return true
// true and true , and, false and false return false
echo 'xor';
echo'<br>';
$newvar=(false xor true);
echo var_dump($newvar);
echo "<br>";
$newvar=(true xor true);
echo var_dump($newvar);
echo "<br>";
$newvar=(false xor false);
echo var_dump($newvar);
echo "<br>";
echo'<hr>';

echo '<strong>Datatypes <br></strong>';
$datatype1= true;
echo var_dump($datatype1);
echo "<br>";
$datatype2= "This is string";
echo var_dump($datatype2);
echo "<br>";
echo "<br>";
echo'<hr>';

echo "<strong>constant</strong>";
echo "<br>";
echo pi;
echo "<br>";
echo'<hr>';

echo "<strong>conditional_statement</strong>";
echo "<br>";
$cd1=10;
if($cd1<9){
    echo 'you can';
}
else if($cd1==10){
    echo "you are 7";
}
else{
    echo "you can't";
}
echo "<br>";
echo'<hr>';

echo "<strong>array and loops</strong>";
echo "<br>";
$arr1=array("one","two","three");
echo "<br>";
// you can't directly print array , you have to use index value
echo $arr1[0];
// array have some methods like count
// count is used to count the number of elements in an array
echo "<br>";
echo count($arr1);
echo "<br>";
echo'<hr>';

echo "1. while loop";
echo "<br>";
$a=0;
while($a<5){
    echo "<br>";
    echo $a;
    $a++;
}
echo "<br>";
// itererating array in php using while loop
$a=0;
while($a<count($arr1)){
    echo "<br>";
    echo $arr1[$a];
    $a++;
}
echo "<br>";
// do while
echo "2. do while loop";
echo "<br>";
$a=0;
do{
    echo "<br>";
    echo $a;
    $a++;
}
while($a<5);
echo "<br>";
// for loop
echo "3. for loop";
echo "<br>";
for ($a=0;$a<5;$a++){
    echo "<br>";
    echo $a;
}

echo "<br>";

echo "4. for each loop";
$plang=["python","c++","c","java"];
echo "<br>";
foreach($plang as $values){
    echo "<br>";
    echo $values;
}
echo "<br>";
echo "<hr>";
// function
echo "<b>Function</b>";
echo "<br>";
function funname(){
    echo "<br>";
    echo "this is function";
}
funname(); /* this is function call*/
echo "<br>";
echo'<hr>';
echo "<b> </b>";
echo'<b>strings in php</b>';
echo "<br>";
$str1="gagan";
$lenn= strlen($str1);
echo $lenn;
echo "<br>";
// if you want to concatenate than use .var name after string , given below
echo "this is my string length" .$lenn  ." thank you" ;
echo "<br>";
Echo "reverse string";
echo "<br>";
$str1="gagan";
echo strrev($str1);
echo "<br>";
$strsearch="this";
echo strpos($strsearch,"is");
echo "<br>";
// replace a word i a string
$strreplace="this";
echo str_replace("is","at",$strreplace);
echo "<br>";

?>
    
</body>
</html>