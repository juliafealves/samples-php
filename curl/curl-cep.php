<?php

$cep = "58415-448";
$ch = curl_init("http://api.postmon.com.br/v1/cep/{$cep}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$address = curl_exec($ch);
curl_close($ch);
var_dump(json_decode($address, true));