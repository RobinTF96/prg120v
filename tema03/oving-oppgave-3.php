$opg1=$_POST["oppgave1"] ?? null;

if (!empty($opg1)) {
    // Kjør oppgave 1
    for ($tall1 = 1; $tall1 <= 10; $tall1++) {
        echo $tall1 . "<br />";
    }
}