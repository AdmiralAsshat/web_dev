<?php

$names = array("Bob","Dan","Frank");

$cities = array("Miami", "Madrid", "Paris");

$data = array("names" => $names, "cities" => $cities);

echo $data["cities"][1];

$bigdata = array("data" => $data);

echo $bigdata["data"]["cities"][0];

?>