<?php
require 'helpers.php';
require 'logic.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lottery App!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
</head>
<body>
<h1>Lottery App!</h1>

<!--<form action='search.php' method='GET'>-->
<!--    <fieldset>-->
<!---->
<!--        <div class='questions' id='totalNUmbers'>-->
<!--            <label for='numberRange'> Total numbers: </label>-->
<!--            <input type='text' id='numberRange'>-->
<!--        </div>-->
<!---->
<!--        <div class='questions' id='numberSelection'>-->
<!--            <label>Number Selection: </label>-->
<!--            <select>-->
<!--                <option>Choose</choose>-->
<!--                <option value="1">1</option>-->
<!--                <option value="2">2</option>-->
<!--                <option value="3">3</option>-->
<!--                <option value="4">4</option>-->
<!--                <option value="5">5</option>-->
<!--                <option value="6">6</option>-->
<!--                <option value="7">7</option>-->
<!---->
<!--            </select>-->
<!--        </div>-->
<!---->
<!--        <div class='questions' id='odds'>-->
<!--            <label>Show me my odds!</label>-->
<!--            <input type='checkbox' name='probabilities' value='?'>-->
<!--        </div>-->
<!---->
<!--        <div class='questions' id='submitButton'>-->
<!--            <input type='submit' value='Im Feeling Lucky!' class='btn btn-primary btn-sm'>-->
<!--        </div>-->
<!---->
<!--    </fieldset>-->
<!---->
<!--</form>-->

<img src='images/giphy1.gif' alt='funny gif of simpsons character'>


<form action='search.php' method='GET'>
    <div class="form-group">
        <label for="numberRange">Total numbers:</label>
        <input type="text" class="form-control" id="numberRange" name='totalNumbers' placeholder="How many numbers are in the range?">
<!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="numberSelection">Random number quantity?</label>
        <select class="form-control" name='randomNumbers' id="numberSelection" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="odds" name='showOdds'>
        <label class="form-check-label" for="odds">Show me my odds!</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php if(isset($totalNumbers)) : ?>

    <div class="alert alert-primary" role="alert">
        Your amazingly lucky numbers are: <?php var_dump($lotteryList); ?>
    </div>

<?php endif; ?>




<p style='margin-top: 100px;'>

get the number of integers from the button range
use that number as the max number in random generator
set empty array
use mt_rand to get a random number and then multiply that number between a random integer bbetween 1 and 10
place that number in the array
do this for as many numbers indictaed in the dropdown
print array

</p>


</body>
</html>
