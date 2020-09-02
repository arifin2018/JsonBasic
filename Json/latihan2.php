<?php

$data = file_get_contents('Coba.json');
$mahasiswa = json_decode($data, true);

// var_dump($mahasiswa);
echo $mahasiswa[1]["Pembimbing"]["pembimbing1"];
echo ",";
echo $mahasiswa[1]["hobby"][0];
