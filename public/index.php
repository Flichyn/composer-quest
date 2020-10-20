<?php
require 'vendor/autoload.php';

use App\wcs\Hello;

$person = new Hello();

echo $person->talk();
