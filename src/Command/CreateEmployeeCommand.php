<?php

namespace App\Command;

use App\Services\EmployeeService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:create-employee',
    description: 'Add an employee to the database',
)]
class CreateEmployeeCommand extends Command
{

    public function __construct(
        private readonly EmployeeService $employeeService
    )
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates a new employee')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the employee')
            ->addArgument('email', InputArgument::REQUIRED, 'The email of the employee');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $employee = $this->employeeService->createEmployee(
                $input->getArgument('name'),
                $input->getArgument('email')
            );

            if (!$employee) {
                $output->writeln('Failed to create employee due to validation errors.');
                return Command::FAILURE;
            }

            $output->writeln('Employee created: ' . $employee->getId());
        } catch (\Exception $e) {
            $output->writeln('Error: ' . $e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
