<script src="tema05/funksjoner.js"></script>

<h3>Slett emne</h3>

<form method="post" action="" id="slettEmneSkjema" name="slettEmneSkjema" onSubmit="return bekreft()">
    Emne: <select id="emnekode" name="emnekode">
        <?php print ("<option value=>Velg emne</option>");
        include ("dynamiske-funksjoner.php"); listeboksEmnekode(); ?>
    </select><br>
    <input type="submit" id="slettEmneKnapp" name="slettEmneKnapp" value="Slett emne"><br>
</form>


<?php
if (isset($_POST["slettEmneKnapp"])) {
    include ("db-tilkobling.php");
    $emnekode = $_POST["emnekode"];

    $sqlSetning = "DELETE FROM emne WHERE emnekode='$emnekode';";
    mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");

    print ("Emnekode $emnekode er nå slettet fra databasen.");
}

?>