<?php
/**
 * 
 */
class Worker
{
    private $Name;
    private $Age;
    private $Profession;
    private $Company;
    private $Salary;
    private $Account;

    function __construct($name, $age, $profession, $account)
    {
        $this->Name = $name;
        $this->Age = $age;
        $this->Profession = $profession;
        $this->Account = $account;
    }

    public function setProfession($role)
    {
        $this->Profession = $role;
    }

    public function setSalary($value)
    {
        $this->Salary = $value;
    }

    public function getSalary()
    {
        return $this->Salary;
    }


    public function work($company, $salary, $profession)
    {
        $this->Company = $company;
        $this->Salary = $salary;
        $this->Profession = $profession;
    }

    public function receive($value)
    {
        $this->Account += $value;
    }
}
