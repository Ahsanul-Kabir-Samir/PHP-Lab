<?php



echo "<h2>12. Foreach with Associative Array</h2>";


$student = array(
    "name" => "MD. AHSANUL KABIR",
    "age" => 20,
    "department" => "CSE",
    "marks" => 85
);

foreach ($student as $key => $value) {

    echo $key . " : " . $value . "<br>";
}


?>