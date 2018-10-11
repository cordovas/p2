<?php

session_start();

if (isset($_SESSION['result'])) {
    $results = $_SESSION['result'];
    $totalNumbers = $results['totalNumbers'];
    $randomNumbers = $results['randomNumbers'];
    $showOdds = $results['showOdds'];

    $lotteryList = [];

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
//note this defualts to 0 if $n < $k
        if ($totalNumbers < $randomNumbers) {
            return 0;
        } else {
            return factorial($totalNumbers) / (factorial($randomNumbers) * factorial(($totalNumbers - $randomNumbers)));
        }
    }

    $oddResults = combinations($totalNumbers,$randomNumbers);

}



////$var = random_int( 1 , 6 );
//
//function randomGenerator($n)
//{
//    #empty array
//    #get the max number for the int random number
//    #
//}
//

//function factorial($n) {
//    if ($n <= 1) {
//        return 1;
//    } else {
//        return factorial($n - 1) * $n;
//    }
//}
//
//function combinations($n, $k) {
//    //note this defualts to 0 if $n < $k
//    if ($n < $k) {
//        return 0;
//    } else {
//        return factorial($n)/(factorial($k)*factorial(($n - $k)));
//    }
//}


session_unset();