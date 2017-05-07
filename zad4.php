<?php

class MyDate{
    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy 
    private $year; //Wartość większa niż 0
    
    public function __construct($day = 1, $month = 01, $year = 2000)
    {
        $this->day=$day; 
        $this->month=$month; 
        $this->year=$year; 
    }
    public function getDay()
    {
        return $this->day;
    }
    public function setDay()
    {
        if (is_integer($day) && $day>0 && $day<=31)
        {
            $this->day=$day; 
        }
    }
    public function setMonth()
    {
        if (is_integer($month) && $month>0 && $month<=12)
        {
            $this->month=$month; 
        }
    }
    public function setYear()
    {
        if (is_integer($year) && $year > 0)
        {
            $this->year=$year; 
        }
    }
    public function getMonth()
    {
        return $this->month; 
    }
    public function getYear()
    {
        return $this->year; 
    }
    public function moveForwardByDay()
    {
        $moveForwad = $this->day+1 && $this->month && $this->year;
        return $moveForwad; 
    }
}

$date = new MyDate(); 

$date->moveForwardByDay(); 
var_dump($date); 
