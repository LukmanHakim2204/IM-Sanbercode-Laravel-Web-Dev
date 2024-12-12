<?php
class Frog
{
    public $name;
    public $legs;
    public $cold_blooded;
    public $jump;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
        $this->jump = "Hop Hop";
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_legs()
    {
        return $this->legs;
    }
    public function  get_cold_blooded()
    {
        return $this->cold_blooded;
    }

    public function jump()
    {
        return $this->jump;
    }
}
?>