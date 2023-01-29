<?php
function DecimalToASCII($decimal) {
    $charset=range(chr(1), chr(127));
    return $charset;
        }
echo DecimalToASCII(33);