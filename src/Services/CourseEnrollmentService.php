<?php

namespace App\Services;

use Symfony\Component\Messenger\Bridge\Amqp\Transport\AmqpStamp;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\CourseEnrollmentMessage;

class CourseEnrollmentService
{
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function enrollEmployee(int $employeeId, string $courseName): void
    {
        $routingKey = match($courseName) {
            'Python' => 'course.python',
            'WebDev' => 'course.webdev',
            'Both'   => 'course.both',
            default  => throw new \Exception("Invalid course name")
        };

        $message = new CourseEnrollmentMessage($employeeId, $courseName);
        $this->messageBus->dispatch($message, [new AmqpStamp($routingKey)]);
    }
}
