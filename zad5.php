<?php
include "User.php"; 
class VIPUser extends User
{
    public $vipCardNumber; 
    
    public function __construct($mail, $surname, $name, $vipCardNumber=null)
    {
        parent::__construct($mail, $surname, $name); 
        $this->vipCardNumber=$vipCardNumber; 
    }
    
    static public function checkCard($newNumber)
    {
        if ($newNumber > 999 && $newNumber%2 == 0)
        {
           return true;  
        }
        else 
        {
            return false; 
        }
    }
    
    public function setVipCardNumber($newCardNumber)
    {
        if ($this->checkCard($newCardNumber) == TRUE)
        {
            $this->vipCardNumber=$vipCardNumber; 
        }
        else 
        {
            $this->vipCardNumber=$vipCardNumber=null; 
        }
    }
    public function getVipCardNumber()
    {
        return $this->vipCardNumber; 
    }
}
$vip = new VIPUser('mail', 'nazwisko', 'imie', 123);

$vip->getVipCardNumber(); 
var_dump($vip); 


