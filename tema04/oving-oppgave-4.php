<?php
$postnr=$_POST["postnr"] ?? null;

if (!empty($postnr)) {
    if (strlen($postnr) == 4 && ctype_digit($postnr)) {
        echo "Postnummeret $postnr er gyldig.";
    } 
    elseif (strlen($postnr) != 4) {
        echo "Postnummeret $postnr må være eksakt 4 siffer langt.";
    }
    elseif (ctype_digit($postnr) == false) {
        echo "Postnummeret $postnr må kun inneholde tall.";
    }
    else {
        echo "Postnummeret $postnr er ikke gyldig.";
    }
}

?>