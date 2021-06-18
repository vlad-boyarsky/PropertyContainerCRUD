<?php

namespace App;

use App\Controllers\NumbersController;
use App\Services\PropertyContainerNumbersService;

require __DIR__ . '/vendor/autoload.php';

$propertyContainerNumbersService = new PropertyContainerNumbersService();
$numbersController = new NumbersController($propertyContainerNumbersService);

$numbersController->create('+7-333-444-3');

$numbersController->update(0, '+380 067 556 1');

echo $numbersController->read(0);