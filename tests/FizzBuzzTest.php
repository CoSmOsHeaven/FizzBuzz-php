<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;
use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{

    /**
     * @test
     */
    public function execute_9_returns_fizz()
    {
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(9);

        $this->assertEquals("Fizz", $returned_value);
    }

    /**
     * @test
     */
    public function execute_10_returns_buzz()
    {
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(10);

        $this->assertEquals("Buzz", $returned_value);
    }

    /**
     * @test
     */
    public function execute_15_returns_buzz()
    {
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(15);

        $this->assertEquals("FizzBuzz", $returned_value);
    }

    /**
     * @test
     */
    public function execute_4_returns_4()
    {
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(4);

        $this->assertEquals("4", $returned_value);
    }

    /**
     * @test
     */
    public function execute_37_returns_fizz(){
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(37);

        $this->assertEquals("Fizz", $returned_value);
    }

    public function execute_57_returns_buzz(){
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(57);

        $this->assertEquals("Buzz", $returned_value);
    }

    public function execute_53_returns_fizzbuzz(){
        $fizzbuzz = new FizzBuzz();

        $returned_value = $fizzbuzz->execute(53);

        $this->assertEquals("FizzBuzz", $returned_value);
    }
}
