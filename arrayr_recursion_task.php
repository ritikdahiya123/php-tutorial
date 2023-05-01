<?php
$arr=array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan"
    ),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),
        "Elephant",
        "Monkey"
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);
foreach($arr as $k => $v){
    $s=gettype($v);
    if($s=='array'){
        foreach($v as $j => $p){
            $q=gettype($p);
            if($q=='array'){
                foreach($p as $a =>$b){
                    $g=gettype($b);
  
                    if($g=='array'){
                        foreach($b as $e => $c){
                            $t=gettype($c);
                            if($t=='array'){}
                            else{
                                echo $c;
                                echo ",";
                            }
                        }
                        
                    }
                    else{
                        echo $b;
                        echo ",";
                    }
                }

                
            }
            else{
                echo $p;
                echo ",";
            }
        }
    }
    else{
        echo $v;
        echo ",";
    }

}
// function rec($arr){
//     foreach($arr as $k => $v){
//         $s=gettype($v);
//         if($s=='array'){
//         rec($v);
//         }
//         else{
//             echo $v;
//             echo ",";
//         }
//     }

// }
// rec($arr);


?>