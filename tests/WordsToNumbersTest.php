<?php
    require_once "src/WordsToNumbers.php";
    class WordsToNumbersTest extends PHPUnit_Framework_TestCase
    {
        function test_setMonthOne()
        {
            //Arrange
            $test_WordsToNumbers = new WordsToNumbers;
            $number = "1";
            //Act: runs the actual method that we are testing.
            $result = $test_WordsToNumbers->makeWords($number);
            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("one", $result);
        }

    }
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests
?>
