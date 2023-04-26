//programs using loops
 //reverse a number
 $num1=1234;
 $rev=0;
 while($num1>=1){
  $rem=$num1%10;
  $rev=$rev*10+$rem;
  $num1=$num1/10;
  
 }
 echo $rev;
 //palindrome number
 $num=121;
 $rev=0;
 $temp=$num;
 while($temp>=1){
  $rem=$temp%10;
  $rev=$rev*10+$rem;
  $temp=$temp/10;
  
 }
 //echo $rev;
 if($num==$rev){
  echo "number is palindrome";
 }
 else{
  echo "not a palindrome number";
 }
 //amstrong number
 $num=153;
 $pro=0;
 $rem=0;
 $temp=$num;
 while($temp>=1){
  $rem=$temp%10;
  $cube=$rem*$rem*$rem;
  $pro+=$cube;
  $temp=$temp/10;
  
 }
 //echo $rev;
 if($num==$pro){
  echo "number is amstrong";
 }
 else{
  echo "not a amrstrong number";
 }
 

 //sum of digit of a number
 $var=12345;
 $sum=0;
 while($var>=1){
  $rem=$var%10;
  $sum+=$rem;
  $var=$var/10;
 
 }
 echo $sum;
 //sum of first and last digit
 $num=2346;
 $l_digit=$num%10;
 $f_digit=$num/1000;
 echo $f_digit;
 $sum=$l_digit+$f_digit;
 echo $sum;
 //even odd
 $num=3;
 if($num%2==0){
  echo "even";
 }
 else{
  echo "odd";
 }
 //prime number
 $num=6;
 $c=0;
 for($i=1;$i<=$num;$i++){
  if($num%$i==0){
    $c+=1;
  }
 }
 if($c==2){
  echo "prine num";
 }
 else{
  echo "non prime";
 }
 //table of a number
 $num=5;
 for($i=1;$i<=10;$i++){
  echo $i*$num;
  echo "<br>";
 }
//factorial of number
$num=5;
$fact=1;
 for($i=1;$i<=$num;$i++){
  $fact*=$i;
 }
 echo $fact;

 //reverse a string
 $str="hello";
for($i=strlen($str);$i>=0;$i--){
  echo $str[$i];
}
//swapping of two number
$a=10;
$b=20;
$temp;
$temp=$a;
$a=$b;
$b=$temp;
echo $a;
echo $b;
//without using third variable
$a=50;
$b=30;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "$a .<br> .$b";
//add two number
echo $a+$b;
//subtract two number
echo $b-$a;
//area of triangle
$b=10;
$h=15;
$area=1/2*($b*$h);
echo $area;
//area of reactangle
$l=15;
$b=5;
$a=2*($l*$b);
echo $a;
echo "<br>";
//star pattern
for($i=1;$i<=5;$i++){
  for($j=1;$j<=$i;$j++){
    echo "*";
  }
  echo "<br>";
}
//star pattern 2
for($i=5;$i>=1;$i--){
  for($j=1;$j<=$i;$j++){
    echo "*";
  }
  echo "<br>";
}
//star pattern 3
for($i=1;$i<=5;$i++){
  for($j=1;$j<=5;$j++){
    echo "*";
  }
  echo "<br>";
}
//star pattern 4

$r=6;
for($i=1;$i<=$r;$i++){
  for($j=1;$j<=$r-$i;$j++){
    echo "&nbsp;&nbsp";
  }
  for($k=1;$k<=$i;$k++){

      echo $k;
    }
    for($f=$i-1;$f>=1;$f--)
    {
      echo $f;
    }
  echo "<br>";

}