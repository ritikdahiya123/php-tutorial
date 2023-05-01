//string fuctions
echo "string function <br>";
$data="this is sting fuction";
//string length
echo "string length <br>";
echo strlen($data);
echo "<br>";
//string reverse
echo "string reverse <br>";
echo strrev($data);
echo "<br>";
//count word
echo "count word in string <br>";
echo str_word_count($data);
//string to uppercase
echo "change to uppercase <br>";
echo strtoupper($data);
echo "<br>";
// change first letter of each word in captial
echo "change to uppercase <br>";
echo ucwords($data);
echo "<br>";
//string to uppercase
echo "change first word letter to uppercase <br>";
echo ucfirst($data);
echo "<br>";
//string to lowercase
echo "change to lowercase <br>";
echo strtolower("THIS IS CAPTIAL");
echo "<br>";
//lc first
echo "change to lowercase <br>";
echo lcfirst("THIS IS CAPTIAL");
echo "<br>";
//replace word in string
echo str_replace('Mr','hi','mr where are you?');
//irreplace
echo str_ireplace('Mr','hi',"mr please");
//addcslashesCare
$ho = "this is dTe New Carwe ";
echo addcslashes($ho,"i");
//addcslashesCare
$ho = "this is 'dTe' New Carwe ";
echo addslashes($ho);
//find position
echo "return position of string<br>";
echo strpos($ho,"is");
//strrpos
//echo "find position from lenght";
echo "return position of string<br>";
echo strrpos($ho,"is");
//repeat string
echo "repeat string";
echo str_repeat($ho,3);
echo "<br>";
//trim
echo "trim function";
echo trim(" helo ");
//ltrim
echo ltrim(" csdf");
//
$str="this";
echo "find substring<br>";
echo strstr($str,'is');
//substr
$string="welcome";
echo substr($string,3,3);
//susstr replace
echo substr_replace('come','done',3);
//chop
echo "remove whitespace from right side";
echo chop("gvdfdf ");
echo "ghjjyt";
//chr
echo "return alphabet from ascii value";
echo chr(98);