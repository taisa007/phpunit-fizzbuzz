<?php

class FizzBuzz {

    private $argc = 0;
    private $num = 0;

    public function __construct($argc, $num) {
        $this->argc = $argc;
        $this->num = $num;
    }

    public function validate() {
        $is_valid = true;

        if ($this->argc != 2) {
            echo '多い'.PHP_EOL;
            $is_valid = false;
        }

        if (!intval($this->num)) {
            echo '数字で'.PHP_EOL;
            $is_valid = false;
        }
        return $is_valid;
    }

    public function doProcess() {
        for ( $i = 1; $i <= $this->num; $i++) {
            if ($i % 15 === 0) {
                echo 'FizBuzz'.PHP_EOL;
            } else if ($i % 3 === 0) {
                echo 'Fizz'.PHP_EOL;
            } else if ($i % 5 === 0) {
                echo 'Buzz'.PHP_EOL;
            } else {
                echo $i.PHP_EOL;
            }
        }
    }
}