<?php require_once 'TimeTravel.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Back to the future</title>
</head>
<body>

<ol>
    <?php
    $start = new \DateTime('1985-12-31');

    $timeTravel = new \back2TheFutur\TimeTravel($start);

    $end = $timeTravel->findDate(\DateInterval::createFromDateString('-1000000000 seconds'));
    echo "<li>La date de fin trouvée est " . $end->format($timeTravel::STEP_FORMAT) . " </li>";
    $timeTravel->setEnd($end);

    echo "<li>" . $timeTravel->getTravelInfo() . '</li>';

    $steps = $timeTravel->backToFutureStepByStep(new \DateInterval('P1M8D'));
    echo "<li>Les étapes sont : <ol>";
    foreach ($steps as $step) {
        echo "<li>$step</li>";
    }
    echo "</ol></li>";
    ?>
</ol>
</body>
</html>