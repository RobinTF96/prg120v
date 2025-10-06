<?php
function listeboksStudiumkode () {
    include ("db-tilkobling.php");
    $sqlSetning = "SELECT * FROM studium ORDER BY studiumkode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $studiumkode = $rad["studiumkode"];
        $studiumnavn = $rad["studiumnavn"];

        print ("<option value='$studiumkode'>$studiumkode $studiumnavn</option>");
    }    
}

function listeboksEmnekode () {
    include ("db-tilkobling.php");
    $sqlSetning = "SELECT * FROM emne ORDER BY emnekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $emnekode = $rad["emnekode"];
        $emnenavn = $rad["emnenavn"];

        print ("<option value='$emnekode'>$emnekode $emnenavn</option>");
    }    
}




?>