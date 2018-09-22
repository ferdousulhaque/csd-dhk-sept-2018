<?php

interface EmployeeInterface 
{
    public function saveEmployee();
}

interface FulltimeEmployeeInterface 
{
    public function getDays();
}
interface ParttimeEmployeeInterface 
{
    public function getHours();
}

Class FulltimeEmployee implements 
        EmployeeInterface, 
        FulltimeEmployeeInterface
{
    public function saveEmployee(){}
    public function getDays(){}
}

Class ParttimeEmployee implements 
        EmployeeInterface, 
        ParttimeEmployeeInterface
{
    public function getHours(){}
    public function saveEmployee(){}
}