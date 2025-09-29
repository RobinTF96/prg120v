<?php
$svar=$_POST ["svar"];

if ($svar==9) {
    print ("Riktig svar! 3 ganger 3 er 9.");
} else {
    print ("Feil svar. 3 ganger 3 er ikke $svar.");
}
?>