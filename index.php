<?php

require_once 'TimeTravel.php';

$start = new \DateTime('1985-12-31');
$end   = new DateTime();//null;

$timeTravel = new \back2TheFutur\TimeTravel($start, $end);

$timeTravel->getTravelInfo();