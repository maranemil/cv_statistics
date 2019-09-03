<?php

$stringFile = file_get_contents("allinone.txt");
$arrLines = explode("\n",$stringFile);
print_r($arrLines[0]);

foreach($arrLines  as $line){
    if(preg_match("/Universitatea/",$line)){
        preg_match_all('/(Universitatea[^?\”].+?\,)/', $line, $match);
        if(!empty($match[0][0]))
            $arrUnis[] = trim(str_replace(array(",","-"),"",$match[0][0]));
    }
    if(preg_match("/Colegiul/",$line)){
    preg_match_all('/(Colegiul[^?\”].+?\,)/', $line, $match);
        if(!empty($match[0][0]))
            $arrUnis[] = trim(str_replace(array(",","-"),"",$match[0][0]));
    }
}
asort($arrUnis);
#print_r(($arrUnis));
#print_r(array_count_values($arrUnis));
/*
foreach($arrUnis as $uni){
    print $uni.PHP_EOL;
}*/

$strCDV = "
Colegiul juridic francoromân
Colegiul National Andrei Muresanu Bistrita
Colegiul Naţional Gheorghe Roşca Codreanu
Colegiul Național de Apărare
Colegiul Național de Apărare
Colegiul Național de Apărare
Colegiul Național Gheorghe Șincai
Colegiul Tehnic Anghel Saligny
Colegiul Tehnic Anghel Saligny
Colegiul Uninominal I – Drobeta Turnu Severin
Colegiul științific al Revistei de Științe Juridice
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Alexandru Ioan Cuza din Iași
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Babeş Bolyai
Universitatea Bogdan Petriceicu Hașdeu
Universitatea Braşov
Universitatea Braşov
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea Bucureşti
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea București
Universitatea California
Universitatea Claude Bernard
Universitatea Creştină Dimitrie Cantemir
Universitatea Creştină Dimitrie Cantemir
Universitatea Creştină Dimitrie Cantemir
Universitatea Creştină Dimitrie Cantemir
Universitatea Danubius Galați
Universitatea Danubius Galați
Universitatea de Medicina din Varna
Universitatea de Nord
Universitatea de Nord
Universitatea de Nord
Universitatea de Petrol si Gaze
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Timișoara
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea de Vest Vasile Goldis
Universitatea Creştină Dimitrie Cantemir
Universitatea din Birmingham
Universitatea București
Universitatea București
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Craiova
Universitatea din Fribourg
Universitatea din Kassel
Universitatea din Lucerna
Universitatea din Petroșani
Universitatea din Poîtiers
Universitatea din Siena
Universitatea din Sud
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Dunărea de jos Galați
Universitatea Hyperion Bucuresti
Universitatea Hyperion Bucuresti
Universitatea Hyperion Bucuresti
Universitatea Libera din Bruxelles
Universitatea Libera din Bruxelles
Universitatea Lucian Blaga Sibiu
Universitatea Lucian Blaga Sibiu
Universitatea Naționala de Aparare
Universitatea Nicolae Titulescu
Universitatea Nicolae Titulescu
Universitatea Ovidius
Universitatea Ovidius
Universitatea Ovidius
Universitatea Ovidius
Universitatea Oxford
Universitatea Paris I Panthéon Sorbonne
Universitatea Paris IV
Universitatea Petre Andrei din Iaşi
Universitatea Pitesti
Universitatea Ripon & York
Universitatea Româno – Americană
Universitatea Româno – Americană
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Spiru Haret
Universitatea Tehnică ClujNapoca
Universitatea Tehnică Gheorghe Asachi Iași
Universitatea Tehnică Gheorghe Asachi Iași
Universitatea Tehnică Gheorghe Asachi Iași
Universitatea Tehnică Gheorghe Asachi Iași
Universitatea Temple
Universitatea Titu Maiorescu din București
Universitatea Titu Maiorescu din București
Universitatea Titu Maiorescu din București
Universitatea Titu Maiorescu din București
Universitatea Transilvania Brașov
Universitatea Transilvania Brașov
Universitatea Valahia
Universitatea Vasile Goldiş Arad
Universitatea Vasile Goldiş Arad
Universitatea Vasile Goldiş Arad
Universitatea Ştefan cel Mare Suceava
";

$arrCDV = explode("\n",$strCDV);
foreach($arrCDV as $entry){
    $arrCDV2[] = trim($entry);
}

sort($arrCDV2);
print_r(array_count_values($arrCDV2));

/*
[Colegiul National Andrei Muresanu Bistrita] => 1
[Colegiul Naţional Gheorghe Roşca Codreanu] => 1
[Colegiul Național Gheorghe Șincai] => 1
[Colegiul Național de Apărare] => 3
[Colegiul Tehnic Anghel Saligny] => 2
[Colegiul Uninominal I – Drobeta Turnu Severin] => 1
[Colegiul juridic francoromân] => 1
[Colegiul științific al Revistei de Științe Juridice] => 1
[Universitatea Alexandru Ioan Cuza din Iași] => 23
[Universitatea Babeş Bolyai] => 10
[Universitatea Bogdan Petriceicu Hașdeu] => 1
[Universitatea Braşov] => 2
[Universitatea Bucureşti] => 7
[Universitatea București] => 12
[Universitatea California] => 1
[Universitatea Claude Bernard] => 1
[Universitatea Creştină Dimitrie Cantemir] => 5
[Universitatea Danubius Galați] => 2
[Universitatea Dunărea de jos Galați] => 7
[Universitatea Hyperion Bucuresti] => 3
[Universitatea Libera din Bruxelles] => 2
[Universitatea Lucian Blaga Sibiu] => 2
[Universitatea Naționala de Aparare] => 1
[Universitatea Nicolae Titulescu] => 2
[Universitatea Ovidius] => 4
[Universitatea Oxford] => 1
[Universitatea Paris I Panthéon Sorbonne] => 1
[Universitatea Paris IV] => 1
[Universitatea Petre Andrei din Iaşi] => 1
[Universitatea Pitesti] => 1
[Universitatea Ripon & York] => 1
[Universitatea Româno – Americană] => 2
[Universitatea Spiru Haret] => 20
[Universitatea Tehnică ClujNapoca] => 1
[Universitatea Tehnică Gheorghe Asachi Iași] => 4
[Universitatea Temple] => 1
[Universitatea Titu Maiorescu din București] => 4
[Universitatea Transilvania Brașov] => 2
[Universitatea Valahia] => 1
[Universitatea Vasile Goldiş Arad] => 3
[Universitatea de Medicina din Varna] => 1
[Universitatea de Nord] => 3
[Universitatea de Petrol si Gaze] => 1
[Universitatea de Vest Timișoara] => 8
[Universitatea de Vest Vasile Goldis] => 8
[Universitatea din Birmingham] => 1
[Universitatea din Craiova] => 8
[Universitatea din Fribourg] => 1
[Universitatea din Kassel] => 1
[Universitatea din Lucerna] => 1
[Universitatea din Petroșani] => 1
[Universitatea din Poîtiers] => 1
[Universitatea din Siena] => 1
[Universitatea din Sud] => 1
[Universitatea Ştefan cel Mare Suceava] => 1
*/



