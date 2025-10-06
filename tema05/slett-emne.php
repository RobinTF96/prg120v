<script src="tema05/funksjoner.js"></script>

<h3>Slett emne</h3>

<form method="post" action="" id="slettEmneSkjema" name="slettEmneSkjema" onSubmit="return bekreft()">
    Studiumkode: <input type="text" id="emnekode" name="emnekode" required><br>
    <input type="submit" id="slettEmneKnapp" name="slettEmneKnapp" value="Slett emne">
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill"><br>
</form>


<?php
if (isset($_POST["slettEmneKnapp"])) {
    include ("tema05/db-tilkobling.php");
    $emnekode = $_POST["emnekode"];

    $sqlSetning = "DELETE FROM emne WHERE emnekode='$emnekode';";
    mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");

    print ("Emnekode $emnekode er nå slettet fra databasen.");
}

?>