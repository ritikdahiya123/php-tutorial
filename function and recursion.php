/function in php
function fac($num){
  $fac=1;
  for($i=1;$i<=$num;$i++){
    $fac*=$i;
  }
  return $fac;
}
//sum of num using function
function sum1($a,$b)//actual parameters
{
  echo "sum of num is".$a+$b;
}
sum1(5,6);//arguments
//default paramenter in function
function sum($a,$b=9)
{
  echo "sum of num is".$a+$b;
}
sum(5);
echo fac(5);
//prime number using function
function prime($num){
  $c=0;
  for($i=1;$i<=$num;$i++){
    if($num%$i==0){
      $c+=1;
    }
  }
    if($c==2){
      echo "prime";
    }
    else{
      echo "non prime";
    }
  
}
prime(12);
//function returning a value
function cube($c)
{
  return $c*$c*$c;
}
echo "cube of num is :".cube(5);

//recursive function

function rec($rec){
  if($rec==1){
    return 1;
  }
  else{
    return $rec*rec($rec-1);
  }
}
$rec=4;
echo "factorial of $rec is".rec($rec);