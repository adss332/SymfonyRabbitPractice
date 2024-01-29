<?php

namespace App\Message;

final class CourseEnrollmentMessage
{

    public function __construct(
        private readonly int $employeeId,
        private readonly string $courseName
    )
    {
    }

    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    public function getCourseName(): string
    {
        return $this->courseName;
    }
}
