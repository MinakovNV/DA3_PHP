<?php


class Player
{
    private $number;

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
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
    public function getPosition()
    {
        return $this->position;
    }
    private $name;
    private $surname;
    private $position;

    /**
     * Player constructor.
     * @param $number
     * @param $name
     * @param $surname
     * @param $position
     */
    public function __construct($number, $name, $surname, $position)
    {
        $this->number = $number;
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
    }

    public function getData() {
        echo "<h4>".$this->number." - ".$this->surname. " - ". $this->name. " - ".$this->position."</h4>";
    }


}