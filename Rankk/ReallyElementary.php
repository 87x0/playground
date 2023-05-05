<?php 
function Findtotalnumber() {
    for ($x = 0; ; $x++) {
        $bb = $x/4;
        $rb = $x/8;
        $wb = $x - $bb - $rb ;
    if ($wb -  $rb == 180 ) {
      return $x ;
    }
    }
}
echo Findtotalnumber();