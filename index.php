<?php

require_once 'vendor/autoload.php';

use Design\Mailrable\EmployeeMailable;
use Design\Mailrable\CustomerMailrable;

$employeeMailrable = new EmployeeMailable();
$employeeMailrable->send('メールを送ります');

$customerMailrable = new CustomerMailrable();
$customerMailrable->send('メールを送ります');

/** TODO::オーナー向けのメールを追加する */