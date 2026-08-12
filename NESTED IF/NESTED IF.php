<?php

echo "<h2>15. Nested If</h2>";

$age = 20;
$hasID = true;

if ($age >= 18) {

    if ($hasID == true) {

        echo "You can enter.";

    } else {

        echo "You need an ID.";

    }

} else {

    echo "You are under 18.";
}

?>