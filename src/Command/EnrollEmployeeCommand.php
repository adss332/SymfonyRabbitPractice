<?php

namespace App\Command;

use App\Services\CourseEnrollmentService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:enroll-employee',
    description: 'Add employee to course'
)]
class EnrollEmployeeCommand extends Command
{

    public function __construct(private readonly CourseEnrollmentService $courseEnrollmentService)
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Enrolls an employee to a course')
            ->addArgument('employeeId', InputArgument::REQUIRED, 'The ID of the employee')
            ->addArgument('courseName', InputArgument::REQUIRED, 'The name of the course');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $this->courseEnrollmentService->enrollEmployee(
                (int) $input->getArgument('employeeId'),
                $input->getArgument('courseName')
            );

            $output->writeln("Employee with ID {$input->getArgument('employeeId')} enrolled to {$input->getArgument('courseName')} course.");
        } catch (\Exception $e) {
            $output->writeln('Error: ' . $e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }

}
