<?php 
/*
 **************First Binary To Decimal Conversion Example************
 *      b       0       0       0       1                           *
 *      d       8       4       2       1                           *
 *          ====================================     =      1       *
 *              0   +   0   +   0   +   1                           *
 ********************************************************************
 
 **************Second Binary To Decimal Conversion Example***********
 *      b       1       0       1       1                           *
 *      d       8       4       2       1                           *
 *          ====================================                    *
 *              8   +   0   +   2   +   1           =      11       *
 ********************************************************************
 
 **************Third Binary To Decimal Conversion Example************
 *      b       1       1       1       1                           *
 *      d       8       4       2       1                           *
 *          ====================================                    *
 *              8   +   4   +   2   +   1           =      15       *
 ********************************************************************
 */
function BinaryToDecimal(string $binary) {
    $binary=strrev($binary);
    $decimal=0;
    for ($i = 0; $i < strlen($binary); $i++) {
        if ($binary[$i]==="1") {
            $decimal+=pow(2, $i)
            ;
        }
    }
    return $decimal;
}
echo  BinaryToDecimal(0001);
echo "\n";
echo  BinaryToDecimal(1011);
echo "\n";
echo  BinaryToDecimal(1111);
echo "\n";

/*
*******************Now Lets Convert From Decimal To Binary*******************
12      =   1100
1025    =   10000000001
65539   =   10000000000000011
*/

function DecimalToBinary($Decimal) {
        $Binary=0;
        while ($Decimal>0) {
            $Binary=($Decimal%2) . $Binary;
            $Decimal= floor($Decimal / 2);
        }
 
        return $Binary;
}
echo DecimalToBinary(121);


/*
 *******************Now Lets Convert From Decimal To ASCII*******************
*
*
*
 */
