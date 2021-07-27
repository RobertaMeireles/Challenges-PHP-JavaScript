<?php

    function fibonacci($n)
    {
        $value1 = 0;
        $value2 = 1;

        for ($i = 0; $i < $n; $i++){
            echo ' '.$value1;
            $value3 = $value2 + $value1;
            $value1 = $value2;
            $value2 = $value3;
        }
    }

    fibonacci(5);
    fibonacci(10);
    fibonacci(1);

?>