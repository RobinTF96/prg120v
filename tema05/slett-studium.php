<script src="tema05/funksjoner.js"></script>

<h3>Slett studium</h3>

<form method="post" action="" id="slettStudiumSkjema" name="slettStudiumSkjema">
    Studiumkode: <input type="text" id="studiumkode" name="studiumkode" required><br>
    <input type="submit" id="slettStudiumKnapp" name="slettStudiumKnapp" value="Slett studium" onSubmit="return bekreft()">
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill"><br>
</form>


<?php
if (isset($_POST["slettStudiumKnapp"])) {
    include ("db-tilkobling.php");
    $studiumkode = $_POST["studiumkode"];

    $sqlSetning = "DELETE FROM studium WHERE studiumkode='$studiumkode';";
    mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");

    print ("Studiumkode $studiumkode er nå slettet fra databasen.");
}

?>