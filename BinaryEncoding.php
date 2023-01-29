<?php

/**
 * In the fly Convert Binary to HEX
 * 0101 0110  0001  0101  0101  0111  1111  1100
 * 5    6     1     5     5     7     F      C
 * Bit --> 0
 * Nibble --> 0000 == h
 * Byte --> 0000 0000
 * 128  64  32  16       8   4  2   1 
 * 0    1   0   1        1   1  1   0
 *  64+16+8+4+2 =   94 ?
 *        power of 2 ´++1 2 4 8 16 32 64 128 256 
*/
$var= "0b1111";
echo $var;

function binaryToDecimal($binary):int 
{
    $result = 0;
    $binary=strrev($binary);
    for ($i=0; $i<8;$i++)
    {
        $c=$binary[$i];
       if ($c==='1')
       {
           $value= pow(2, $i);
           $result+=$value;
       }
        echo $c;
    }
    return $result;
}
#echo binaryToDecimal("01011110");
#& Both bits T #| any bit T #^ only 1 bit T
# ~
$a=7;  # 0111
$b=12; # 1100
       #10011 
$c=$a + $b;
echo $c;
