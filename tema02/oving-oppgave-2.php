<?php
$svar1=$_POST ["svar1"] ?? null;
$svar2=$_POST ["svar2"] ?? null;
$svar3=$_POST ["svar3"] ?? null;¨
$gift=$_POST ["gift"] ?? null;
$barn=$_POST ["barn"] ?? null;


if (!empty($svar1)) {
    if ($svar1==9) {
        print ("Riktig svar! 3 ganger 3 er 9.<br>");
    } else {
        print ("Feil svar. 3 ganger 3 er ikke $svar1.<br>");
    }
}

if (!empty($svar2)) {
    if (in_array(strtolower($svar2), ["ja", "j"])){
        print ("Du er student på USN.<br>");
    } elseif (in_array(strtolower($svar2), ["nei", "n"])) {
        print("Du er ikke student på USN.<br>");
    }
    else {
        print("Ugyldig svar. Vennligst svar med 'ja' eller 'nei'.<br>");
    }
}

if (!empty($gift) && !empty($barn)) {
    if (($gift == "gift" || $gift == "ugift") && ($barn == "barn" || $barn == "uten_barn")) {
        $tekst1 = "Du er " . $gift;
        if ($barn == "barn") {
            $tekst1 .= " og har barn";
        } else {
            $tekst1 .= " og har heldigvis ikke barn";
        }
        print($tekst1 . ".<br>");
    } else {
        print("Ugyldig valg. Vennligst velg gyldige alternativer.<br>");
    }
}

?>