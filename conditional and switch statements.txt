/conditional statements
//if statement
$num=15;
if($num==5){
  echo "true";
  echo "<br>";
}
//if else statement
  if($num==5){
     echo "equal";
    echo "<br>";
  }
else{
echo "not equal";
  echo "<br>";
}
//else if statement
$num=1;
if($num==1){
  echo "monday";
}
else if($num==2){
  echo "tuesday";
}
else if($num==3){
  echo "wednesday";
}
else if($num==4){
        echo "thrusday";
}
else if($num==5){
  echo "friday";
}
else if($num==6){
  echo "saturday";
}
  else if($num==7){
  echo "sunday";
}
else{
  echo "wrong day entered";
}
//nested if statement

$age=3;
$country="indi";
if($country=="india"){
  if($age>=18){
    echo "you can vote";
  }
  else{
    echo "you can not vote";
    
  }
}
else{
  echo "you are not indian";
}
//switch satement
$num=10;
switch($num){
  case 10:
  echo "number is equal to 10";
  break;
  case 20:
  echo "number is equal to 20";
  break;
  case 30:
  echo "number is equal to 30";
  break;
  default:
  echo "wrong number";
  