<?php
require_once 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function test_引数テスト1() {
        $fizzbuzz = new FizzBuzz(3, 15);
        $result = $fizzbuzz->validate();
        $this->assertFalse($result);
    }

    public function test_引数テスト2() {
        $fizzbuzz = new FizzBuzz(2, 15);
        $result = $fizzbuzz->validate();
        $this->assertTrue($result);
    }

    public function test_引数テスト3() {
        $fizzbuzz = new FizzBuzz(2, 'a');
        $result = $fizzbuzz->validate();
        $this->assertFalse($result);
    }

    public function test_引数テスト4() {
        $fizzbuzz = new FizzBuzz(2, 20);
        $result = $fizzbuzz->validate();
        $this->assertTrue($result);
    }
}