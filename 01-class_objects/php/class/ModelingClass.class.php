<?php

class ModelingClass
{
    //Setting Atributes
    public $Name;
    public $Age;
    private $Profession;
    private $SalaryAccount;

    //Seting Class Constructor
    function __construct($name, $age, $profession, $salaryAccount){
        $this->Name = (string) $name;
        $this->Age = (int) $age;
        $this->Profession = (string) $profession;
        $this->SalaryAccount = (float) $salaryAccount;
    }

    //METHODS
    public function setName($name){
        $this->Name = (string) $name;
    }

    public function setAge($age){
        $this->Age = (int) $age;
    }

    public function setProfession($profession){
        $this->Profession = (string) $profession;
    }

    public function showMessage($message){
        echo "<p>{$message}</p>";
    }

    public function toReal($value){
        return number_format($value, 2, '.', ',');
    }

    public function work($taskName, $value){
        $this->SalaryAccount += $value;
        $this->showMessage("{$this->Name} worked on {$taskName} and received {$value} R$ and now have ".$this->toReal($this->SalaryAccount)." R$ in account!");
    }
}
