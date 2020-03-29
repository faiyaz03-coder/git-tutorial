<?php

class Employee
{
    private $first_name;
    private $last_name;
    private $age;
    private $gender;
    private $email;

    public function __construct($first_name, $last_name, $age, $gender, $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGender()
    {
        return $this->getGender();
    }

    public function getEmail()
    {
        return $this->getGender();
    }
}

$employee = new Employee('Bob', 'Smith', 30, 'Male', 'faiyaz03@gmail.com');
echo $employee->getFirstName();
echo "<br/>";
echo $employee->getLastName();
echo "<br/>";
echo $employee->getAge();
echo "<br/>";
echo $employee->getGender();
echo "<br/>";
echo $employee->getEmail();


