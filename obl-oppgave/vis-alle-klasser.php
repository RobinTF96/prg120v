<?php
include ("db-tilkobling.php");

$sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
$antallRader = mysqli_num_rows($sqlResultat);

print ("<h3>Registrerte emner</h3>");
print ("<table border=1>");
print ("<tr> <th align=left>Klassekode</th> <th align=left>Klassenavn</th> <th align=left>Studiumkode</th> </tr>");

for ($r = 1; $r <= $antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat);
    $klassekode = $rad["klassekode"];
    $klassenavn = $rad["klassenavn"];
    $studiumkode = $rad["studiumkode"];

    print ("<tr> <td> $klassekode </td> <td> $klassenavn </td> <td> $studiumkode </td> </tr>");
}
print ("</table>");


?>
<button type="button" onclick="window.location.href='obl-oppgave.html'">Tilbake</button>