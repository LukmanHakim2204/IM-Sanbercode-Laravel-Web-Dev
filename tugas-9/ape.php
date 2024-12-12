<?php
class Ape
{
    public $name;
    public $legs;
    public $cold_blooded;
    public $yell;
    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
        $this->yell = "Auooo";
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

    public function yell()
    {
        return $this->yell;
    }
}
?>