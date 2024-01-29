<?php

namespace App\MessageHandler;

use App\Message\CourseEnrollmentMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class PythonCourseEnrollmentHandler
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(CourseEnrollmentMessage $message)
    {
        if ($message->getCourseName() === 'Python Programming') {
            $this->logger->info("Enrolling employee ID " . $message->getEmployeeId() . " to Python Programming course.");
        }
    }
}
