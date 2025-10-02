<?php
$postnr=$_POST["postnr"] ?? null;
$klassekode=$_POST["klassekode"] ?? null;


//Oppgave 1 som sjekker om postnr har 4 siffer og kun tall.
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

//Oppgave 2 som sjekker om klassekode har 3 tegn, begynner med to bokstaver og slutter med ett tall.
if (!empty($klassekode)) {
    if (strlen($klassekode) != 3) {
        echo "Klassekoden " . strtoupper($klassekode) . "må være eksakt 3 tegn langt.";
    }
    elseif (!preg_match('/^[a-zA-Z]{2}/', $klassekode)) {
        echo "Klassekoden " . strtoupper($klassekode) . "må begynne med to bokstaver.";
    }
    elseif (!preg_match('/\d$/', $klassekode)) {
        echo "Klassekoden " . strtoupper($klassekode) . " må slutte med ett tall.";
    }
    else {
        echo "Klassekoden " . strtoupper($klassekode) . "er gyldig.";
    }
}

?>