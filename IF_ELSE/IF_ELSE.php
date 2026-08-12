<?php

echo "<h2>3. If-Else</h2>";

$studentMarks = 75;

if ($studentMarks >= 80) {

    echo "Grade: A+";

} elseif ($studentMarks >= 70) {

    echo "Grade: A";

} elseif ($studentMarks >= 60) {

    echo "Grade: B";

} elseif ($studentMarks >= 50) {

    echo "Grade: C";

} else {

    echo "Grade: F";
}

?>