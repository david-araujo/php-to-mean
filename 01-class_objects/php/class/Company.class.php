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

    /**
     * @desc   Method to contract and set Company information to worker object.
     * @param  Worker $employee Must to be a Worker object
     * @param  float  $salary
     * @param  string $role     will be the profession of the employee.
     */
    public function contract($employee, $salary, $role)
    {
        $this->Employee = (object) $employee;
        $this->Employee->work($this->Name, $salary, $role);
        $this->Sectors += 1;
    }

    /**
     * @desc  Used to change worker obejects.
     * @param Worker $employee
     */
    public function setEmployee($employee)
    {
        $this->Employee = (object) $employee;
    }

    /**
     * @desc   Used to add month salary to employee.
     */
    public function pay()
    {
        $this->Employee->receive($this->Employee->getSalary());
    }

    /**
     * @desc   Used to change Role and Salary from one Worker object.
     * @param  string $newRole
     * @param  float  $newSalary Optional
     */
    public function promote($newRole, $newSalary = null)
    {
        $this->Employee->setProfession($newRole);

        if ($newSalary)
        {
            $this->Employee->setSalary($newSalary);
        }
    }

    /**
     * @desc   Set NULL Company information from a Worker object.
     * @param  float $rescission Value that worker receive when will dismmiss.
     */
    public function dismiss($rescission)
    {
        $this->Sectors -= 1;
        $this->Employee->receive($rescission);
        $this->Employee->setProfession(NULL);
        $this->Employee->setSalary(NULL);
        $this->Employee = NULL;
    }
}
