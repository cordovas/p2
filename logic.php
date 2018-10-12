<?php

session_start();

if (isset($_SESSION['result'])) {
    $results = $_SESSION['result'];
    $totalNumbers = $results['totalNumbers'];
    $randomNumbers = $results['randomNumbers'];
    $showOdds = $results['showOdds'];
    $errors = $results['errors'];

    $lotteryList = [];

//$chill = (int)$totalNumbers;

//dump($errors);
//die();

    if (!$errors) {
        for ($i = 0; $i < $randomNumbers; $i++) {
            $var = random_int(1, $totalNumbers);
            array_push($lotteryList, $var);
        }

        function factorial($totalNumbers)
        {
            if ($totalNumbers <= 1) {
                return 1;
            } else {
                return factorial($totalNumbers - 1) * $totalNumbers;
            }
        }

        function combinations($totalNumbers, $randomNumbers)
        {
            if ($totalNumbers < $randomNumbers) {
                return 0;
            } else {
                return factorial($totalNumbers) / (factorial($randomNumbers) * factorial(($totalNumbers - $randomNumbers)));
            }
        }

        $oddResults = combinations($totalNumbers, $randomNumbers);
    }

    session_unset();
}

session_unset();


