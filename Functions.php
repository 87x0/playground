<?php
$a = 4;  # int
$a = $a + 1;
$a = true; # boolean
$a = 3.14; # float #s(sign)eeeeeee(exponent)mmmmmm
$a = "X is cool"; # string  88 32
$a = []; # array container
$a = [1,2]; # array of two numbers
#echo $a[2]; # There is no 3rd element inside the array PHP will return null and a warning.
$a = ["X"=>4]; # Dictionary , key value store
$a["X"]++;  
$a ["Y"]=6;
$a []=7;
#print_r($a);
#echo $a["X"];
function arraySum(array $array):int {
    $result= 0;
    foreach ($array as $k=>$v){
        echo "$k: $v\n";
    $result += $v;
    }
     
    return $result;
}
$a = arraySum([1,2,3,4]);
echo $a;