<?php
require_once 'FizzBuzz.php';

$fizzbuzz = new FizzBuzz($argc ,$argv[1]);
if ($fizzbuzz->validate()) $fizzbuzz->doProcess();
