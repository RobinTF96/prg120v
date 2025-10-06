<h3>Registrer studium</h3>

<form method="post" action="" id="registrerEmneSkjema" name="registrerEmneSkjema">
    Emnekode: <input type="text" id="emnekode" name="emnekode" required><br>
    Emnenavn: <input type="text" id="emnenavn" name="emnenavn" required><br>
    Studiumkode: <select id="studiumkode" name="studiumkode" required>
        <?php print ("<option value=>velg studium</option>");
        include ("dynamiske-funksjoner.php"); listeboksStudiumkode(); ?>
    </select><br>
    <input type="submit" id="registrerEmneKnapp" name="registrerEmneKnapp" value="Registrer emne">
</form>

<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button>


<?php

$emnekode = $_POST["emnekode"] ?? null;
$emnenavn = $_POST["emnenavn"] ?? null;
$studiumkode = $_POST["studiumkode"] ?? null;

if (isset($_POST["registrerEmneKnapp"])) {

    if (!$emnekode || !$emnenavn || !$studiumkode) {
        print ("Alle felt må fylles ut");
    }
    else {
        include ("db-tilkobling.php");

        $sqlSetning = "SELECT * FROM emne WHERE emnekode='$emnekode';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader != 0) {
            print ("Emnekode $emnekode er allerede registrert i databasen");
        }
        else {
            $sqlSetning = "INSERT INTO emne (emnekode, emnenavn, studiumkode) VALUES ('$emnekode', '$emnenavn', '$studiumkode');";
            mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere data i databasen");

            print ("Emnekode: $emnekode $emnenavn $studiumkode er nå registrert i databasen.");
    }


}
}
?>