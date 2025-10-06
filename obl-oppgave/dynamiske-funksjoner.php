<?php
function listeboksKlassekode() {
    include ("db-tilkobling.php");
    $sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $klassekode = $rad["klassekode"];
        $klassenavn = $rad["klassenavn"];
        $studiumkode = $rad["studiumkode"];

        print ("<option value='$klassekode'>$klassekode</option>");
    }    
}

function listeboksBrukernavn() {
    include ("db-tilkobling.php");
    $sqlSetning = "SELECT * FROM student ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++) {
        $rad = mysqli_fetch_array($sqlResultat);
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        $klassekode = $rad["klassekode"];


        print ("<option value='$brukernavn'>$klassekode $fornavn $etternavn</option>");
    }    
}

function sjekklisteBrukernavn() {  
   include ("db-tilkobling.php");
   
    $sqlSetning = "SELECT * FROM student ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen.");

    $antallRader = mysqli_num_rows($sqlResultat);

    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        $klassekode = $rad["klassekode"];

        print ("<input type='checkbox' id='$brukernavn' name='brukernavn[]' value='$brukernavn'> $fornavn $etternavn $klassekode<br>");
    }
}



?>