<?php

class Employee
{
    private $first_name;git
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
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
}

$employee = new Employee('Bob', 'Smith', 30);
echo $employee->getFirstName();
echo "<br/>";
echo $employee->getLastName();
echo "<br/>";
echo $employee->getAge();


