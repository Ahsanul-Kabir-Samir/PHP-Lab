<?php

echo "<h2>14. Student Result</h2>";

$name = "MD. AHSANUL KABIR";
$marks = 82;

echo "Student Name: " . $name . "<br>";
echo "Marks: " . $marks . "<br>";

if ($marks >= 80) {

    echo "Result: Excellent";

} elseif ($marks >= 60) {

    echo "Result: Good";

} elseif ($marks >= 40) {

    echo "Result: Pass";

} else {

    echo "Result: Fail";
}

?>