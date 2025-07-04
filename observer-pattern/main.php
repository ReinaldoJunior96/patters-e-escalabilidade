<?php
require_once __DIR__ . '/src/WeatherStation.php';
require_once __DIR__ . '/src/TemperatureDisplay.php';
require_once __DIR__ . '/src/HeatAlert.php';

$station = new WeatherStation();
$display = new TemperatureDisplay();
$alert = new HeatAlert();

$station->attach($display);
$station->attach($alert);

$station->setTemperatura(25);
$station->setTemperatura(32);
$station->setTemperatura(28);
