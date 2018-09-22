<?php
include "Student.php";

Class StudentAdapter extends Student
{
    public function getName()
    {
        return $this->getFirstName(). " ". $this->getLastName();
    }

}