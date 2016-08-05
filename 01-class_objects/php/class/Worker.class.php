<?php
/**
 * @desc Class that will create an object that will interact with the class Company.
 *
 * @author David Francisco de Araujo <david.araujo91@gmail.com>
 */
class Worker
{
    private $Name;
    private $Age;
    private $Profession;
    private $Company;
    private $Salary;
    private $Account;

    /**
     * @desc  Constructor Method that requires information to set innitial atributes for a Worker Object.
     * @param string $name
     * @param int $age
     * @param string $profession
     * @param float $account Just add values to simulate a Bank account.
     */
    function __construct($name, $age, $profession, $account)
    {
        $this->Name = $name;
        $this->Age = $age;
        $this->Profession = $profession;
        $this->Account = $account;
    }


    // SETTERS: Modify private objects atributes
    public function setProfession($role)
    {
        $this->Profession = $role;
    }

    public function setSalary($value)
    {
        $this->Salary = $value;
    }
    //END Setters

    // GETTERS: Used to get private attributes from an object
    public function getSalary()
    {
        return $this->Salary;
    }
    //END Getters

    /**
     * @desc   Method that sets Company information to a Worker object
     * @param  string $company    Company Name
     * @param  float  $salary
     * @param  string $profession Role that the emplyee will have on Campany
     */
    public function work($company, $salary, $profession)
    {
        $this->Company = (string) $company;
        $this->Salary = (float) $salary;
        $this->Profession = (string) $profession;
    }

    /**
     * @desc   Sum values to Account.
     * @param  float $value
     */
    public function receive($value)
    {
        $this->Account += $value;
    }
}
