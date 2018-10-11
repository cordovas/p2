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
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
</head>
<body>
<h1>Lottery App!</h1>


<img src='images/giphy1.gif' alt='funny gif of simpsons character'>


<form action='search.php' method='GET'>
    <div class="form-group">
        <label for="numberRange">Total numbers:</label>
        <input type="text"
               class="form-control"
               id="numberRange"
               name='totalNumbers'
               placeholder="How many numbers are in the range?">
    </div>

    <div class="form-group">
        <label for="numberSelection">Random number quantity?</label>
        <select class="form-control" name='randomNumbers' id="numberSelection">
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

<?php if (isset($totalNumbers)) : ?>

    <div class="alert alert-primary top-spacing" role="alert">
        Your amazingly lucky numbers are:
        <?php echo implode(', ', $lotteryList); ?>
    </div>

<?php endif; ?>

<?php if (isset($showOdds)) : ?>

    <div class="alert alert-warning" role="alert">
        Your odds of winning are 1 in
        <?php echo $oddResults; ?>
    </div>

<?php endif; ?>


<p style='margin-top: 100px;'>

</p>


</body>
</html>
