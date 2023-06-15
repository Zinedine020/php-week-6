<?php 
// Opdracht 1
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

echo "<br>";

// Opdracht 2
function berekenGemiddelde($nummer1, $nummer2) {
    $gemiddelde = ($nummer1 + $nummer2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(5, 10);

echo "<br>"; 

// Opdracht 3
function dagenEindeJaar() {
    $nuDatum = date_create();
    $eindeJaar = date_create(date("Y")."-12-31");

    $verschil = date_diff($nuDatum, $eindeJaar);
    $dagen = $verschil->format("%a");

    return $dagen;
}

echo "Aantal dagen tot het einde van het jaar: " . dagenEindeJaar();

echo "<br>";

// Opdracht 4
function countTotalLength($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$array = array("Ik", "ben", "Zinedine");
echo "De totale lengte van de strings: " . countTotalLength($array);
?>
