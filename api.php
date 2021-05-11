<?php

$url = 'https://api.spacexdata.com/v3/missions';

$raw = file_get_contents($url);


$json = json_decode($raw);

var_dump($json);


$navettesMission3 = $json[3]->payload_ids;
$nameMissions = $json[3]->mission_name;
$wikipediaLiens1 = $json[8]->wikipedia;


//echo $nomMission3;
//echo '<br>';
//echo $wikipediaLiens1;

foreach ($navettesMission3 as $key => $navette)
{
    echo '<li>'. $navette .'</li>';
}


function cvf_convert_object_to_array($data) {

    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    }
    else {
        return $data;
    }
}

?>