<?php
//array lenth count
$arr=[1,2,4,5,0,-1];
echo count($arr);
//array sorting
sort($arr);
echo "<br>";
foreach($arr as $s){
    echo $s."<br>";
}
//reverse sorting
rsort($arr);
  foreach($arr as $s){
    echo $s."<br>";

}
//reverse array
echo "array reverse .<br>";
$rev=array_reverse($arr);
foreach($rev as $s){
    echo $s."<br>";
}
//delete item from last of array
echo "delete item from end .<br>";
array_pop($arr);
foreach($arr as $s){
    echo $s."<br>";
}
//delete item from begining
echo "delete item from start .<br>";
array_shift($arr);
foreach($arr as $s){
    echo $s."<br>";
}
// add item in end
echo "add item in end.<br>";
array_push($arr,6);
foreach($arr as $s){
    echo $s."<br>";
}
//add item in start
echo "add item in start .<br>";
array_unshift($arr,7);
foreach($arr as $s){
    echo $s."<br>";
}
//merge array
echo "merge two array <br>";
$arr1=[3,4,5,8];
print_r (array_merge($arr,$arr1));
print_r($arr);
//replace array
echo "replace array <br>";
$arr1=[3,4,5,8];
$arr3=[2,5,6,9];
print_r (array_replace($arr1,$arr3));
//print_r ($arr1);
//arrray intersection
echo "find common element between two array.<br>";
$num3=array_intersect($arr,$arr1);
foreach($num3 as $s){
  echo $s."<br>";
}
//array key intersect
echo "key intersection <br>";
$itr=[1,9,8,7];
$itr1=[1,3,4,5,5,6,9];
echo "<pre>";
print_r(array_intersect_key($itr,$itr1));
echo "</pre>";

//search any item in array
echo "find item index in array <br>";
$arr3=[3,6,7,8,5,4,5];
echo array_search(5,$arr3);
//in array function
echo "array function <br>";
if(in_array(76,$arr)){
    echo "found";
}
else{
    echo "not found<br>";
}
//differnce between two array
$arr=[1,23,4,5,9];
$arr1=[2,4,56,5,7,10];
echo "differnce between two array <br>";
echo "<pre>";
print_r(array_diff($arr,$arr1));
echo "</pre>";
echo "<br>";
//array key  differnce
echo "key  differnce <br>";
echo "<pre>";
print_r(array_diff_key($arr,$arr1));
echo "</pre>";
//array key and value differnce
echo "key values differnce <br>";
echo "<pre>";
print_r(array_diff_assoc($arr,$arr1));
echo "</pre>";
//product of all value of array
echo "all items product <br> ";
$arr=[1,2,3,4];
echo array_product($arr);
//delete duplicate item from array
echo "delete duplicate<br>";
$dup=[1,2,3,3,2];
print_r(array_unique($dup));
//array slice
$sc=[1,2,3,4,5,7];
echo "array slice.<br>";
print_r(array_slice($sc,2));
//array_count_value
echo "array_count_value.<br>";
$count=[2,54,6,7,8,8,9,4];
echo "<pre>";
print_r(array_count_values($count));
echo "</pre>";

//array range
echo "array range<br>";
$r=range('a',"z");
echo "<pre>";
print_r($r);
echo "</pre>";

//aray flip
echo "exchange key and value<br>";
echo "<pre>";
print_r(array_flip($arr));
echo "</pre>";
//array combine
echo "give assoc array from 2 diff array<br>";
$d=[1,2,3,4];
$d1=['mango','apple','orange','lichi'];
echo "<pre>";
print_r(array_combine($d,$d1));
echo "</pre>";
//array_change_key_case
echo "change to uppercase<br>";

echo "<pre>";
print_r(array_change_key_case($d1,CASE_UPPER));
echo "</pre>";
//array chunk
echo "array_chunk<br>";
echo "<pre>";
print_r(array_chunk($d1,2));
echo "</pre>";

//implode
echo "array to string<br>";
echo implode(" ",$d1);

//explode
echo "string to array<br>";
$b="this is the sting";
print_r(explode(" ",$b));
//filter method in array
$num=[1,2,3,4,5,6,7,9,17,19];
$num1=[];
//print_r (array_filter(function($num){return(num)}));
// fileration from array without filter method using loop
foreach($num as $n){
  if($n%2==0){
    array_push($num1,$n);
  }
}
print_r($num1);
//filter method
//function test_odd($number){
 // if ($number[$i]%2==0){
 // return $number[$i];
//}
$number=[1,3,4,56,6,7];
$number1=[];

//print_r(array_filter(function($number,check_odd)));
//associative array
$age=["ritik"=>"22","viney"=>"23","shivam"=>"21"];
echo "associative array<br>";
//echo $age["ritik"];
foreach($age as $key => $value){
  echo "$key age is $value<br>";
    
}
?>