<?php
//$opr="sub";
$num1=5;
$num2=3;
// function sum($num1,$num2){
//     echo "sum of num is:".$num1+$num2;


// }
// function sub($num1,$num2){
//     echo "differnce of num is:".$num1-$num2;


// }
// function mul($num1,$num2){
//     echo "multiply of num is:".$num*$num2;


// }
// function div($num1,$num2){
//     echo "divison of num is:".$num1/$num2;


// }
// switch($opr){
//     case "add":
//         sum($num1,$num2);
//         break;
//         case "sub":
//             sub($num1,$num2);
//             break;
//             case "mul":
//                 mul($num1,$num2);
//                 break;
//                 case "div":
//                     div($num1,$num2);
// }
$opr="add";
function cal($num1,$num2,$opr){
    switch($opr){
             case "add":
                echo "addition of num is:".$num1+$num2;
                break;
               case "sub":
                   echo "subtraction of num is:".$num1-$num2;
                   break;
                   case "mul":
                        echo "multiplication of num is:". $num1*$num2;
                       break;
                       case "div":
                           echo "division of num is:".$num1/$num2;

}
}
cal($num1,$num2,$opr);
?>