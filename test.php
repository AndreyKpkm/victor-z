<?php

// Format: dd-mm-yyyy
$string = '21-11-2015';

// Год 2015, месяц 11, день 21
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'Год $3, месяц $2, день $1';

echo preg_replace($pattern, $replacement, $string);

// Month: 11, Day 21, Year 2015
$replacement2 = 'Month: $2, Day: $1, Year: $3!';
echo "<br>". preg_replace($pattern, $replacement2, $string);