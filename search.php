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

$errors = $form->validate([
    'totalNumbers' => 'required|digit'
]);

$_SESSION['result'] = [
    'totalNumbers' => $totalNumbers,
    'randomNumbers' => $randomNumbers,
    'showOdds' => $showOdds,
    'errors' => $errors
];

//
header('location: index.php');
