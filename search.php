<?php

require 'helpers.php';
require 'Form.php';

//dump($_GET);
//die();

session_start();

$form = new DWA\Form($_GET);

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

