<?php
$opg1=$_POST["oppgave1"] ?? null;
$opg2=$_POST["oppgave2"] ?? null;
$opg3=$_POST["oppgave3"] ?? null;

if ($opg1=="oppgave1") {
    for ($tall1 = 1; $tall1 <= 10; $tall1++) {
        echo $tall1 . "<br />";
    }
}

if ($opg2=="oppgave2") {
    for ($tall2 = 1; $tall2 <= 10; $tall2++) {
        echo "Kvadratet av " . $tall2 . " er " . ($tall2 * $tall2) . ".<br />";
    }
}

if ($opg3=="oppgave3") {
    for ($tall3 = 1; $tall3 <= 10; $tall3++) {
        echo $tall3 . " ";
    }
    echo "<br />";
    for ($tall3 = 11; $tall3 <= 20; $tall3++) {
        echo $tall3 . " ";
    }
    echo "<br />";
    for ($tall3 = 21; $tall3 <= 30; $tall3++) {
        echo $tall3 . " ";
    }
    echo "<br />";
}

if ($opg4=="oppgave4") {
    for ($tall4 = 1; $tall4 <= 10; $tall4++) {
        $sum += $tall4
    }
    echo "Summen av alle tallene 1 - 10 er " . $sum . ".<br>"
}
?>