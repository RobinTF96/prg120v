<?php
$svar1=$_POST ["svar1"];
$svar2=$_POST ["svar2"];

if ($svar==9) {
    print ("Riktig svar! 3 ganger 3 er 9.");
} else {
    print ("Feil svar. 3 ganger 3 er ikke $svar.");
}

if ($svar2=="ja" or $svar2=="Ja" or $svar2=="JA" or $svar2=="j") {
    print ("Du er student på USN.");
} else {
    print("Du er ikke student på USN.");
}
?>