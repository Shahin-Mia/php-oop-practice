<?php

namespace App\Classes;

class Series
{
    private $firstNumber, $secondNumber, $option, $oddResult, $evenResult, $result;

    public function __construct($data)
    {
        $this->firstNumber = $data["first_number"];
        $this->secondNumber = $data["second_number"];
        $this->option = $data["option"];
    }

    public function getResult()
    {
        if ($this->firstNumber < $this->secondNumber) {
            for ($this->firstNumber; $this->firstNumber <= $this->secondNumber; $this->firstNumber++) {
                $this->result += $this->firstNumber;
                if ($this->firstNumber % 2 != 0) {
                    $this->oddResult .= $this->firstNumber . ", ";
                } else {
                    $this->evenResult .= $this->firstNumber . ", ";
                }
            }
        } elseif ($this->secondNumber < $this->firstNumber) {
            for ($this->secondNumber; $this->secondNumber <= $this->firstNumber; $this->secondNumber++) {
                $this->result += $this->secondNumber;
                if ($this->secondNumber % 2 != 0) {
                    $this->oddResult .= $this->secondNumber . ", ";
                } else {
                    $this->evenResult .= $this->secondNumber . ", ";
                }
            }
        }

        if ($this->option == "odd") {
            return $this->oddResult;
        } elseif ($this->option == "even") {
            return $this->evenResult;
        } else {
            return $this->result;
        }
    }
}
