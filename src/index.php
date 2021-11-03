<?php

require '../vendor/autoload.php';

use Petrik\Composer1\User;

$user = new User();
$user->fun();
$user->fun2()->fun();