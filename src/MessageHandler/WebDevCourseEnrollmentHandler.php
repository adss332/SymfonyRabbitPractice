<?php

namespace App\MessageHandler;

use Psr\Log\LoggerInterface;
use App\Message\CourseEnrollmentMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class WebDevCourseEnrollmentHandler
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke(CourseEnrollmentMessage $message)
    {
        $this->logger->info("Enrolling employee ID " . $message->getEmployeeId() . " to Web Development course.");
    }
}