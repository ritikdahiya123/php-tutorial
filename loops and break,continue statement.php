//loops
//for loop
for($i=10;$i>=1;$i--){
  echo $i*2;
  echo "<br>";
}
//while loop
//sum of n natural numbers

$num=20;
$sum=0;
$i=1;
while($i<=$num){
  $sum+=$i;
  $i+=1;
}
echo $sum;
//do while loop
$i=1;
 do{
   if($i%2==0){
     echo "$i is even";
  }
  else{    echo "$i is odd";  }
$i+=1;
   echo "<br>";
}
  while($i<10);
//for each loop
$ec=array('num',1,true,"echo");
foreach($ec as $s){
  echo "$s<br>";
}
//continue statement
for($i=1;$i<=10;$i++){
  if($i==5){
    continue;
  }
    echo $i;
    echo "<br>";
}
  //break statement
  for($i=1;$i<=10;$i++){
  if($i==5){
    break;
  }
    echo $i;
    echo "<br>";
    
  
  
}