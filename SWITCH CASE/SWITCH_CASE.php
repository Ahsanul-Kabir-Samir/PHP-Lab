<?php

echo "<h2>4. Switch Case</h2>";

$day = 3;

switch ($day) {

    case 1:
        echo "Saturday";
        break;

    case 2:
        echo "Sunday";
        break;

    case 3:
        echo "Monday";
        break;

    case 4:
        echo "Tuesday";
        break;

    case 5:
        echo "Wednesday";
        break;

    case 6:
        echo "Thursday";
        break;

    case 7:
        echo "Friday";
        break;

    default:
        echo "Invalid day";
}

?>