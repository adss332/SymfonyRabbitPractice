<?php

namespace App\Services;

use App\Entity\Employee;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class EmployeeService
{
    private EntityManagerInterface $entityManager;
    private ValidatorInterface $validator;

    public function __construct(EntityManagerInterface $entityManager, ValidatorInterface $validator)
    {
        $this->entityManager = $entityManager;
        $this->validator = $validator;
    }

    public function createEmployee(string $name, string $email): ?Employee
    {
        $employee = new Employee();
        $employee->setName($name);
        $employee->setEmail($email);

        $errors = $this->validator->validate($employee);
        if (count($errors) > 0) {
            return null;
        }

        $this->entityManager->persist($employee);
        $this->entityManager->flush();

        return $employee;
    }
}
