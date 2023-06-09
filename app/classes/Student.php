<?php

namespace App\Classes;

class Student
{
    private $firstName, $lastName, $fullName;

    public function __construct($data)
    {
        $this->firstName = $data["first_name"];
        $this->lastName = $data["last_name"];
    }

    public function getFullName()
    {
        $this->fullName = $this->firstName . " " . $this->lastName;
        return $this->fullName;
    }
}
