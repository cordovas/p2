<?php

session_start();

if(isset($_SESSION['result'])) {
    $results = $_SESSION['result'];
    $totalNumbers = $results['totalNumbers'];
    $randomNumbers = $results['randomNumbers'];
    $showOdds = $results['showOdds'];
}

session_unset();