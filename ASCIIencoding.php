<?php
/*
* $charsetB = "01";
$charsetD = "0123456789";
$charsetH = "0123456789ABCDEF";
$charsetA = "\x00\0x01\0x3\0x4\0x5\0x5\0x6\0x7\0x8\0x9\\0x0A\0x0F\0x10\0x11... \0x11\0x12\0x13\0x14\0x15\0x12\0x12\0x12\0x12\0x12................................ABCDEFG";

# $charsetAN0o0obCharset:P="0123456789101112131415161718192021222324";
function numberToAscii(int $number): string
{
    if ($number === 32) {
        return " ";
    }
    if ($number === 48) {
        return "0";
    }
    if ($number === 65) {
        return "A";
    }
    return " ";
}
numberToAscii(32);
$number = 66;
assert(numberToAscii(32) === " ", "Check if it's a space");
assert(numberToAscii(0x41) === "A", "Check if it's a A");
assert(numberToAscii(0x42) === "B", "Check if it's a B");
assert(numberToAscii(48) === "0", "Check if it's a 0");
echo numberToAscii($number);
*/
$charset=[];

for ($i = 0; $i < 128; $i++) {
    $charset[]=chr($i);
}
var_dump($charset);
/*
$charsetASCCI = "\x00\0x01\0x2\0x3\0x4\0x5\0x5\0x6\0x7\0x8\0x9\\0x0A\0x0F\0x10\0x11... \0x11\0x12\0x13\0x14\0x15\0x12\0x12\0x12\0x12\0x12................................ABCDEFG";

function letterToNumber(string $letter): int
{
    d
}
*/