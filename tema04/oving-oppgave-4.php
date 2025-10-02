<?php
$postnr=$_POST["postnr"] ?? null;
$klassekode=$_POST["klassekode"] ?? null;
$emnekode=$_POST["emnekode"] ?? null;
$tallmidt=substr($emnekode, 3, 3);
$tallslutt=substr($emnekode, 6, 1);


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
        echo "Klassekoden " . strtoupper($klassekode) . " må være eksakt 3 tegn langt.";
    }
    elseif (!preg_match('/^[a-zA-Z]{2}/', $klassekode)) {
        echo "Klassekoden " . strtoupper($klassekode) . " må begynne med to bokstaver.";
    }
    elseif (!preg_match('/\d$/', $klassekode)) {
        echo "Klassekoden " . strtoupper($klassekode) . " må slutte med ett tall.";
    }
    else {
        echo "Klassekoden " . strtoupper($klassekode) . " er gyldig.";
    }
}

//Oppgave 3 som sjokker om emnekode har:
//7 tegn, begynner med 3 bokstaver, etterfulgt av 3 tall, og en bokstav eller siffer til slutt.
if (!empty($emnekode)) {
    if (strlen($emnekode) != 7) {
        echo "Emnekoden må være eksakt 7 tegn.";
    }
    elseif (!preg_match('/^[a-zA-Z]{3}/', $emnekode)) {
        echo "Emnekoden " . strtoupper($emnekode) . " må starte med 3 bokstaver.";
    }
    elseif (!ctype_digit($tallmidt)) {
        echo "Emnekoden " . strtoupper($emnekode) . " har ikke 3 sifre i posisjon 4 - 6.";
    }
    elseif (!ctype_digit($tallslutt) && !ctype_alpha($stall)) {
        echo "Emnekoden " . strtoupper($emnekode) . " avsluttes ikke med en bokstav eller tall.";
    }
    elseif (preg_match('/^[a-zA-Z]{3}\d{3}[a-zA-Z0-9]$/', $emnekode)) {
        echo "Emnekoden " . strtoupper($emnekode) . " er gyldig!";
    }
}
?>