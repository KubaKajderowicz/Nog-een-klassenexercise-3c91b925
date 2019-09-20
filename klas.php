<?php

echo "Wie zit er in de klas?";

$classmates = readline();

echo "De studenten in de klas zijn: \n";

$student = explode(" ", $classmates);

foreach ($student as $list) {
    echo $list. "\n";
}