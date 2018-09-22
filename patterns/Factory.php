<?php
include("Student.php");
include("Teacher.php");

Class Factory
{

static function createObject($className)
{
    switch($className)
    {
        case 'Student':
            return new FullTimeStudent();
        break;

        case 'Teacher':
            return new Teacher();
        break;

    }

}

}