<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h3>Работа с массивами . </h3>";

class  TestClass
{
    /**
     *The function returns an array of random numbers from 10 to 30 with the text some- in the form json 
     * @return false|string
     */
    public function __toString()
    {
        return json_encode(
            array_flip(
                array_map(function($value) {return "some-{$value}";}, range(0, rand(10, 30)))
            )
        );
    }
}

echo new TestClass();