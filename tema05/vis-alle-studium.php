<?php
include ("db-tilkobling.php");

$sqlSetning = "SELECT * FROM studium ORDER BY studiumkode;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
$antallRader = mysqli_num_rows($sqlResultat);

print ("<h3>Registrerte emner</h3>");
print ("<table border=1>");
print ("<tr> <th align=left>Studiumkode</th> <th align=left>Studiumnavn</th> </tr>");

for ($r = 1; $r <= $antallRader; $r++) {
    $rad = mysqli_fetch_array($sqlResultat);
    $studiumkode = $rad["studiumkode"];
    $studiumnavn = $rad["studiumnavn"];

    print ("<tr> <td> $studiumkode </td> <td> $studiumnavn </td> </tr>");
}
print ("</table>");


?>