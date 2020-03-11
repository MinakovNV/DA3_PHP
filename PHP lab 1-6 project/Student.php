<?php


class Student
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getGpa()
    {
        return $this->gpa;
    }
    private $name;
    private $surname;
    private $gpa;

    public function __construct($id, $name, $surname, $gpa)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->gpa = $gpa;
    }
    public function getStudentData() {
        echo "<h3>".$this->id. " - ".$this->surname. " ".$this->name. "  - ".$this->gpa."</h3>";
    }

}