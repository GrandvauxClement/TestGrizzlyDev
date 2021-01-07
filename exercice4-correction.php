<?php

define("var1", 20);

function fonction1() {
    $var = array();
    for($i=0; $i<var1; $i++) {
        $var = [$i => rand(0, 100)]; //transformer $var en tableau associatif
    }
    return $var;
}

function fonction2($param) {
    for($i=0; $i<var1; $i++) {
        for($j=1; $j<(var1-$i); $j++) {
            if ($param[$j] > $param[$j+1] ) {
                $temp = $param[$j+1];
                $param[$j+1] = $param[$j];
                $param[$j] = $temp;
            }
        }
    }
    return $param;
}

function fonction3($param1, $param2) {
    $str = "<TABLE>";
    $lig1 = "<TR><TH>Indice</TH>";
    $lig2 = "<TR><TH>$param2</TH>";
    foreach ($param1 as $cle => $val) {
        $lig1 .= "<TD>$cle</TD>";
        $lig2 .= "<TD>$val</TD>";
    }
    $lig1 .= "</TR>";
    $lig2 .= "</TR>";
    $str .= $lig1.$lig2."</TABLE>";
    return $str;
}

$var2 = fonction1();
echo fonction3($var2, "Le début");
echo fonction3(fonction2($var2), "La suite");