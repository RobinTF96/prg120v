<?php
$opg1=$_POST["oppgave1"] ?? null;
$opg2=$_POST["oppgave2"] ?? null;

if ($opg1=="oppgave1") {
    for ($tall1 = 1; $tall1 <= 10; $tall1++) {
        echo $tall1 . "<br />";
    }
}

if ($opg2=="oppgave2") {
    for ($tall2 = 1; $tall2 <= 10; $tall2++) {
        echo "Kvadratet av" . $tall . "er" . ($tall2 * $tall2) . "<br />";
    }
}
?>