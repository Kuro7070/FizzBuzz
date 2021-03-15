<?php
declare(strict_types=1);

class FizzBuzz
{

    private $fizz;
    private $buzz;
    private $output;

    public function __construct()
    {
        $this->fizz = "Fizz";
        $this->buzz = "Buzz";

        $this->output = $this->fizz_buzz();
        echo "\nFizzBuzz von 1 - 100 mit den Vielfachen von 3 und 5\n\n";
        echo $this->output;
    }

    public function fizz_buzz(): string
    {
        $output_temp = "";
        for ($number = 1; $number <= 100; $number++) {
            $ausgabe = "";

            if ($number % 3 == 0) {
                $ausgabe = $ausgabe . $this->fizz;
            }

            if ($number % 5 == 0) {
                $ausgabe = $ausgabe . $this->buzz;
            }

            if (empty($ausgabe)) {
                $ausgabe = $ausgabe . $number;
            }
            $output_temp .= $ausgabe."\n";

        }
        return $output_temp;
    }
}


$obj = new FizzBuzz();
?>