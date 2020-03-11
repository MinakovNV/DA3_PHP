<?php


class Club
{
    private $name;

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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getRatingPoints()
    {
        return $this->ratingPoints;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }
    private $country;
    private $ratingPoints;
    private $players;

    /**
     * Club constructor.
     * @param $name
     * @param $country
     * @param $ratingPoints
     * @param $players
     */
    public function __construct($name, $country, $ratingPoints, $players)
    {
        $this->name = $name;
        $this->country = $country;
        $this->ratingPoints = $ratingPoints;
        $this->players = $players;
    }

    public function printClubData() {
        echo "<h3>".$this->name." - ". $this->country. " - ".$this->ratingPoints.":</h3>";
        for($i = 0; $i < count($this->players); $i++) {
            echo $this->players[$i]->getData();
        }
    }


}