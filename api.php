<?php

$url = 'https://api.spacexdata.com/v3/missions';

$raw = file_get_contents($url);


$json = json_decode($raw);

var_dump($json);


$navettesMission3 = $json[3]->payload_ids;
$nameMissions = $json[3]->mission_name;
$wikipediaLiens3 = $json[3]->wikipedia;


//echo $nomMission3;
//echo '<br>';
//echo $wikipediaLiens1;

foreach ($navettesMission3 as $key => $navette)
{
    echo '<li>'. $navette .'</li>';
}


?>