<?php
$postnr1=$_POST["postnr1"] ?? null;
$postnr4=$_POST["postnr4"] ?? null;
$klassekode=$_POST["klassekode"] ?? null;
$emnekode=$_POST["emnekode"] ?? null;
$tallmidt=substr($emnekode, 3, 3);
$tallslutt=substr($emnekode, 6, 1);


//Oppgave 1 som sjekker om postnr har 4 siffer og kun tall.
if (!empty($postnr1)) {
    if (strlen($postnr1) == 4 && ctype_digit($postnr1)) {
        echo "Postnummeret $postnr1 er gyldig.";
    } 
    elseif (strlen($postnr1) != 4) {
        echo "Postnummeret $postnr1 må være eksakt 4 siffer langt.";
    }
    elseif (ctype_digit($postnr1) == false) {
        echo "Postnummeret $postnr1 må kun inneholde tall.";
    }
    else {
        echo "Postnummeret $postnr1 er ikke gyldig.";
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
    elseif (!ctype_digit($tallslutt) && !ctype_alpha($tallslutt)) {
        echo "Emnekoden " . strtoupper($emnekode) . " avsluttes ikke med en bokstav eller tall.";
    }
    elseif (preg_match('/^[a-zA-Z]{3}\d{3}[a-zA-Z0-9]$/', $emnekode)) {
        echo "Emnekoden " . strtoupper($emnekode) . " er gyldig!";
    }
}

//Oppgave 4
//Ta utgangspunkt i oppgave 1 og lag en funksjon validerPostnr(postnr) som validerer at postnummer
//er fylt ut, består av nøyaktig 4 tegn og at alle tegnene er siffre.

function validerPostnr($postnr4) {
    $gyldigPostnr = false;
    if (!empty($postnr4)) {
        if (strlen($postnr4) == 4 && ctype_digit($postnr4)) {
            $gyldigPostnr = true;
            return $gyldigPostnr;
        } 
    }
    else {
        return $gyldigPostnr;
    }
}

$gyldigPostnr=validerPostnr($postnr4);
if ($gyldigPostnr) {
    echo "Postnummeret $postnr4 er gyldig.";
} else {
    echo "Postnummeret $postnr4 er ikke gyldig.";
}

?>