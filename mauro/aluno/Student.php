<?php

class Student {
    public string $name;
    public string $birthday;
    public string $course;

    public function __construct(string $name, string $birthday, string $course) {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->course = $course;
    }

    public function calculateAge() { 
        $birthDate = new DateTime($this->birthday);
        $currentDate = new DateTime();
        $interval = $currentDate->diff($birthDate);
        
        return $interval->y;
    }

}