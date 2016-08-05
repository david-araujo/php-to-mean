<?php
/**
 * @desc Class that will create a Company object that will interact with the Worker object.
 *
 * @author David Francisco de Araujo <david.araujo91@gmail.com>
 */
class Company
{
    private $Name;
    private $Sectors;

    /**
     * @desc Must have to be a Worker object.
     * @var Worker
     */
    private $Employee;

    
    function __construct($companyName)
    {
        $this->Name = $companyName;
        $this->Sectors = 0;
    }

    public function contract($employee, $salary, $role)
    {
        $this->Employee = (object) $employee;
        $this->Employee->work($this->Name, $salary, $role);
        $this->Sectors += 1;
    }

    public function setEmployee($employee)
    {
        $this->Employee = (object) $employee;
    }

    public function pay()
    {
        $this->Employee->receive($this->Employee->getSalary());
    }

    public function promote($newRole, $newSalary = null)
    {
        $this->Employee->setProfession($newRole);

        if ($newSalary)
        {
            $this->Employee->setSalary($newSalary);
        }
    }

    public function dismiss($rescission)
    {
        $this->Sectors -= 1;
        $this->Employee->receive($rescission);
        $this->Employee->setProfession(NULL);
        $this->Employee->setSalary(NULL);
        $this->Employee = NULL;
    }
}
