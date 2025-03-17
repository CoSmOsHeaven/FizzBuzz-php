<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function execute($value){
        if($this->integerChecker($value)){
            if(($this->isDivisibleBy($value, 3) &&
                    $this->isDivisibleBy($value, 5)) ||
                ($this->contains($value, 3) &&
                    $this->contains($value, 5))){
                return "FizzBuzz";
            }elseif($this->isDivisibleBy($value, 5) || $this->contains($value, 5)){
                return "Buzz";
            }
            elseif($this->isDivisibleBy($value, 3) || $this->contains($value, 3)) {
                return "Fizz";
            }
            return $value;
        }
        return null;
    }

    function isDivisibleBy($value, $divisor) : bool{
        return $value % $divisor == 0;
    }

    function contains($value, $number) : bool{
        return strpos((string)$value, (string)$number) !== false;
    }

    function integerChecker($value): bool {
        return is_integer($value);
    }
}