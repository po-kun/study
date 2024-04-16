<?php

require_once 'vendor/autoload.php';

use Design\Mail\EmployeeMail;
use Design\Mail\CustomerMail;

$employeeMailrable = new EmployeeMail();
$employeeMailrable->send('メールの内容です');

$customerMailrable = new CustomerMail();
$customerMailrable->send('メールの内容です2');

/** TODO::オーナー向けのメールを追加する */
