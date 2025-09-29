<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$opg1=$_POST["oppgave1"] ?? null;

if ($opg1=="oppgave1") {
    for ($tall1 = 1; $tall1 <= 10; $tall1++) {
        echo $tall1 . "<br />";
    }
}
?>