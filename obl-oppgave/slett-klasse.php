<script src="funksjoner.js"></script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
    Klassekode: <select id="klassekode" name="klassekode">
        <?php print ("<option value=>Velg klassekode</option>");
        include ("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
    </select><br>
    <input type="submit" id="slettKlasseKnapp" name="slettKlasseKnapp" value="Slett klasse"><br>
</form>

<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button><br>


<?php
if (isset($_POST["slettKlasseKnapp"])) {
    include ("db-tilkobling.php");
    $klassekode = $_POST["klassekode"];

    $sqlSjekk = "SELECT * FROM student WHERE klassekode='$klassekode';";
    $sqlResultat = mysqli_query($db, $sqlSjekk);

    if (mysqli_num_rows($sqlResultat) > 0) {
        print ("Ikke mulig å slette klassekode $klassekode. Klassen er i bruk av en eller flere studenter.");
    }
    else {
        $sqlSetning = "DELETE FROM klasse WHERE klassekode='$klassekode';";
        mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen. Sjekk at klassen ikke er i bruk av noen studenter.");

        print ("Klassekode $klassekode er nå slettet fra databasen.");
    }
}

?>