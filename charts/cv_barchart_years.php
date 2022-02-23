<?php
$string = file_get_contents("allinone.txt");
$string = str_replace("-", " - ", $string);

$tok = strtok($string, " \n\t");
$arrToks = [];
while ($tok !== false) {
    #echo "Wort=$tok<br />";
    $tok = strtok(" \n\t");
    if ($tok < 2020 && $tok > 1940) {
        $arrToks[] = (int)$tok;
    }
}
$arrCount = array_count_values($arrToks);
ksort($arrCount);
print_r($arrCount);