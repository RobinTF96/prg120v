<?php
$svar1=$_POST ["svar1"] ?? null;
$svar2=$_POST ["svar2"] ?? null;

if (!empty($svar1)) {
    if ($svar1==9) {
        print ("Riktig svar! 3 ganger 3 er 9.") <br>;
    } else {
        print ("Feil svar. 3 ganger 3 er ikke $svar1.");
    }
}

if (!empty($svar2)) {
    if (in_array(strtolower($svar2), ["ja", "j"])){
        print ("Du er student på USN.");
    } else {
        print("Du er ikke student på USN.");
    }
}
?>