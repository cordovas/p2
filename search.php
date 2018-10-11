<?php

require 'helpers.php';

//dump($_GET);
//die();

session_start();

$totalNumbers = $_GET['totalNumbers'];
$randomNumbers = $_GET['randomNumbers'];
$showOdds = $_GET['showOdds'];


$_SESSION['result'] = [
    'totalNumbers' => $totalNumbers,
    'randomNumbers' => $randomNumbers,
    'showOdds' => $showOdds
];

//
header('location: index.php');

