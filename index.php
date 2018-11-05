<?php

require_once 'TimeTravel.php';

$start = new \DateTime('1985-12-31');


$timeTravel = new \back2TheFutur\TimeTravel($start);

$end   = $timeTravel->findDate(DateInterval::createFromDateString('-1000000000 seconds'));

$timeTravel->setEnd($end);

$timeTravel->getTravelInfo();