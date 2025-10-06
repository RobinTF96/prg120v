<script src="funksjoner.js"></script>

<h3>Slett flere studenter</h3>

<form method="post" action="" id="slettStudenterSkjema" name="slettStudenterSkjema" onSubmit="return bekreft()">
    Studenter:<br>
    <?php include ("dynamiske-funksjoner.php"); sjekklisteBrukernavn(); ?><br>
    <input type="submit" id="slettStudenterKnapp" name="slettStudenterKnapp" value="Slett studenter"><br>
</form>

<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button><br>

<?php
if (isset($_POST["slettStudenterKnapp"])) {
    include ("db-tilkobling.php");

    if (!empty($_POST["brukernavn"])) {
        $brukernavn = $_POST["brukernavn"];
        $antall = count($brukernavn);

        $slettedeStudenter = [];

        for ($r = 0; $r < $antall; $r++) {
            $brukernavnValgt = $brukernavn[$r];
            $sqlHent = "SELECT fornavn, etternavn FROM student WHERE brukernavn='$brukernavnValgt';";
            $sqlStudentNavn = mysqli_query($db, $sqlHent);
            $rad = mysqli_fetch_array($sqlStudentNavn);
            $fornavn = $rad["fornavn"];
            $etternavn = $rad["etternavn"];

            $sqlSetning = "DELETE FROM student WHERE brukernavn='$brukernavnValgt';";
            mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");
            $slettedeStudenter[] = "$fornavn $etternavn";
        }
        
        if (!empty($slettedeStudenter)) {
            print ("Du har nå slettet følgende studenter fra databasen: " . implode(", ", $slettedeStudenter) . "."");
        }
    }
}

?>