<?php
    function fizzBuzz($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $i . " - FizzBuzz\n";
            } elseif ($i % 3 == 0) {
                echo $i . " - Fizz\n";
            } elseif ($i % 5 == 0) {
                echo $i . " - Buzz\n";
            } else {
                echo $i . " - $i \n";
            }
        }
    }
    fizzBuzz(20);
?>