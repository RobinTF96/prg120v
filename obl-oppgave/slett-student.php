<script src="funksjoner.js"></script>

<h3>Slett student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
    Student: <select id="brukernavn" name="brukernavn">
        <?php print ("<option value=>Velg student</option>");
        include ("dynamiske-funksjoner.php"); listeboksBrukernavn(); ?>
    </select><br>
    <input type="submit" id="slettStudentKnapp" name="slettStudentKnapp" value="Slett student"><br>
</form>

<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button><br>

<?php
if (isset($_POST["slettStudentKnapp"])) {
    include ("db-tilkobling.php");
    $brukernavn = $_POST["brukernavn"];
    $sqlHent = "SELECT fornavn, etternavn FROM student WHERE brukernavn='$brukernavn';";
    $sqlStudentNavn = mysqli_query($db, $sqlHent);

    if ($rad = mysqli_fetch_array($sqlStudentNavn)) {
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];

        $sqlSetning = "DELETE FROM student WHERE brukernavn='$brukernavn';";
        mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");

        print ("Student $fornavn $etternavn er nå slettet fra databasen. Oppdater siden for å se endringene.");
    }
}

?>