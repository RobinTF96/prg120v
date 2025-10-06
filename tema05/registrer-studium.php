<h3>Registrer studium</h3>

<form method="post" action="" id="registrerStudiumSkjema" name="registrerStudiumSkjema">
    Studiumkode: <input type="text" id="studiumkode" name="studiumkode" required><br>
    Studiumnavn: <input type="text" id="studiumnavn" name="studiumnavn" required><br>
    <input type="submit" id="registrerStudiumKnapp" name="registrerStudiumKnapp" value="Registrer studium">
</form>

<a href="oving-oppgave-5.html">Tilbake</a>


<?php
include ("db-tilkobling.php");
header('Content-type: text/html; charset=utf-8');

if (isset($_POST["registrerStudiumKnapp"])) {
    $studiumkode = $_POST["studiumkode"];
    $studiumnavn = $_POST["studiumnavn"];

    if (!$studiumkode || !$studiumnavn) {
        print ("Alle felt må fylles ut");
    }
    else {

        $sqlSetning = "SELECT * FROM studium WHERE studiumkode='$studiumkode';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader != 0) {
            print ("Studiumkode $studiumkode er allerede registrert i databasen");
        }
        else {
            $sqlSetning = "INSERT INTO studium (studiumkode, studiumnavn) VALUES ('$studiumkode', '$studiumnavn');";
            mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere data i databasen");

            print ("Studiumkode $studiumkode med navn $studiumnavn er nå registrert i databasen.");
        }


    }
}
?>