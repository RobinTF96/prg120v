<h3>Registrer student</h3>

<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
    Brukernavn: <input type="text" id="brukernavn" name="brukernavn" required><br>
    Fornavn: <input type="text" id="fornavn" name="fornavn" required><br>
    Etternavn: <input type="text" id="etternavn" name="etternavn" required><br>
    Klassekode: <select id="klassekode" name="klassekode" required>
        <?php print ("<option value=>Velg klassekode</option>");
        include ("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
    </select><br>
    <input type="submit" id="registrerStudentKnapp" name="registrerStudentKnapp" value="Registrer student">
</form>

<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button><br>


<?php

$brukernavn = $_POST["brukernavn"] ?? null;
$fornavn = $_POST["fornavn"] ?? null;
$etternavn = $_POST["etternavn"] ?? null;
$klassekode = $_POST["klassekode"] ?? null;

if (!empty($brukernavn)) {
    $brukernavn = strtolower($_POST["brukernavn"]);
}
if (!empty($fornavn)) {
    $fornavn = ucfirst(strtolower($_POST["fornavn"]));
}
if (!empty($etternavn)) {
    $etternavn = ucfirst(strtolower($_POST["etternavn"]));
}

if (isset($_POST["registrerStudentKnapp"])) {

    if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
        print ("Alle felt må fylles ut");
    }
    else {
        include ("db-tilkobling.php");

        $sqlSetning = "SELECT * FROM student WHERE brukernavn='$brukernavn';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader != 0) {
            print ("Brukernavn $brukernavn er allerede registrert i databasen");
        }
        else {
            $sqlSetning = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode');";
            mysqli_query($db, $sqlSetning) or die ("Ikke mulig å registrere data i databasen");

            print ("Følgende er nå lagt til i databasen:<br>Brukernavn: $brukernavn<br>Fornavn: $fornavn<br>Etternavn: $etternavn<br>Klassekode: $klassekode");
    }


}
}
?>