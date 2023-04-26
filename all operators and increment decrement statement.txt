//operators
//arthimatic operator
$a=22;
$b=3;
//exponent
echo $a**$b;
//addition
echo $a+$b;
echo "<br>";
//subtraction
echo $a-$b;
echo "<br>";

//divison
echo $a/$b;
echo "<br>";
//modulus operator
echo $a%$b;
//multiplication
echo $a*$b;
echo "<br>";
//assinment operator
$a;
$b=50;
//assign
$a=$b;
echo $a;
echo "<br>";
//add then assign
$a=50;
$b=5;
$a+=$b;
echo $a;
echo "<br>";
//subtract then assign
$a-=$b;
echo $a;
echo "<br>";
//multiply then assign
$a*=$b;
echo $a;
echo "<br>";
//divide then assign
echo $a/=$b;
echo "<br>";
$s=5;
$q=3;
//divide then assign quotient
$s%=$q;
echo $s;
echo "<br>";
//bitwise operator
echo "bitwise operator<br>";
$a=6;
$b=5;
//bitwise and
//multiply bits
echo $a&$b;
echo "<br>";
//bitwise  or
//add bits
echo $a|$b;
echo "<br>";
//xor
//giv true if both are not same
echo $a^$b;
echo "<br>";
//not operator
$a=2;

echo ~$a;
$a=3;
$b=2;
echo "<br>";
//left shift
//a*b(pow2)
echo $a<<$b;
//right shift
//a/(pow2)
echo var_dump($a>>$b);


//logical operators

$l=5;
$m=5;
$j=5;
//logical end
if($l==$m && $l==$j){
  echo "equal";
}
else{
  echo "not equal";
}
echo "<br>";
//logical or
if($l==$m || $l==$j){
  echo "equal";
}
else{
  echo "not equal";
}
echo "<br>";
//xor 
if($l==$m xor $l==$j){
  echo "equal";
}
else{
  echo "not equal";
}
echo "<br>";
//not operator
$a=true;
echo var_dump(!$a);



//comparison operator
//equal
$p=5;
$q="5";
if($p==$q){
  echo "$p equal to $q";
  
}
//identical operator
if($p===$q){
    echo "both equal with same data type";
    echo "<br>";
}
else{
    echo "not identical equal";
}
//not equal
$a=15;
$b=15;
 echo var_dump($a!=$b);
 //identical not equal
 echo var_dump($a!==$b);
 // <>
 echo var_dump($a<>$b);


 
//pre increment or decrement
$a=15;
$b=5;
 $c=$a+$b;
 $a+=1;
 echo $c;
 
 //pre increment
 $c=$a+$b;
 ++$a;
 echo $c;
 echo "<br>";
 //decrement
 $j=5;
 $k=6;
 $j--;
 $l=$j+$k;
 echo $l;
 echo $j;
 //pre decrement
 --$j;
 $l=$j+$k;
 echo $l;
 echo $j;