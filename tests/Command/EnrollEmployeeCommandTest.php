<?php
namespace App\Tests\Command;

use App\Command\EnrollEmployeeCommand;
use App\Services\CourseEnrollmentService;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class EnrollEmployeeCommandTest extends KernelTestCase
{
    private $commandTester;
    private $courseEnrollmentService;

    protected function setUp(): void
    {
        $kernel = static::createKernel();
        $kernel->boot();

        $application = new Application($kernel);

        $this->courseEnrollmentService = $this->createMock(CourseEnrollmentService::class);

        $this->courseEnrollmentService->method('enrollEmployee')
            ->willReturnCallback(function ($employeeId, $courseName) {
                if ($courseName === 'InvalidCourse') {
                    throw new \Exception("Invalid course name");
                }
            });

        $application->add(new EnrollEmployeeCommand($this->courseEnrollmentService));

        $command = $application->find('app:enroll-employee');
        $this->commandTester = new CommandTester($command);
    }

    public function testExecuteWithValidData(): void
    {
        $this->commandTester->execute([
            'employeeId' => '1',
            'courseName' => 'Python',
        ]);

        $this->assertEquals(0, $this->commandTester->getStatusCode());
        $this->assertStringContainsString('Employee with ID 1 enrolled to Python course.', $this->commandTester->getDisplay());
    }

    public function testExecuteWithInvalidCourseName(): void
    {
        $this->commandTester->execute([
            'employeeId' => '1',
            'courseName' => 'InvalidCourse',
        ]);

        $this->assertEquals(1, $this->commandTester->getStatusCode());
        $this->assertStringContainsString('Error: Invalid course name', $this->commandTester->getDisplay());
    }
}

