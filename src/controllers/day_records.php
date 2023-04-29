<?php
session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = date('d/m/Y', $date);

loadTemplateView("day_records", ['today' => $today]);
