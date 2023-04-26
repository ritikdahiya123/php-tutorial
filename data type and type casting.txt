//datatypes in php
//int data type
$num=2;
echo $num;
//int to string
$str = (string)$num;
echo gettype($str);
echo "<br>";
//int to float
$f=(float)$num;
echo gettype($f);
//string data type
$s="hello";
echo gettype($s);
echo "<br>";
$num=(int)$s;
echo gettype($num);
echo "<br>";
//string to float
$f=(float)$s;
echo gettype($f);
echo "<br>";
//boolen data type
$s=true;
$p=false;

echo $s;
echo "<br>";
echo var_dump($p);
echo "<br>";
echo gettype($p);
echo "<br>";
$b=(string)$s;
echo gettype($b);
//float data type
$float=12.4;
echo "<br>";
echo var_dump($float);
//float to integer
$int=(int)$float;

echo var_dump($int);
//null data type
$nl=null;
echo var_dump($nl);
//array data type
$arr=["viney","bhanu",1,true];
echo var_dump($arr);
//object data type
class programming{
  public function Name($name){
    echo "my name is:$name";
  }
}
$obj=new programming();
$obj->Name("programming with logic");