<?php

require 'helpers.php';
require 'Form.php';

//dump($_GET);
//die();

session_start();

$form = new DWA\Form($_GET);

$totalNumbers = $form->get('totalNumbers');
$randomNumbers = $form->get('randomNumbers');
$showOdds = $form->get('showOdds');

$_SESSION['result'] = [
    'totalNumbers' => $totalNumbers,
    'randomNumbers' => $randomNumbers,
    'showOdds' => $showOdds
];

//
header('location: index.php');

