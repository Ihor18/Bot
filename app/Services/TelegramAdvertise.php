<?php


namespace App\Services;


class TelegramAdvertise
{
   private  $advertise;
   private $value;
    public function __construct()
    {
        $advertise =(new GoogleSheetsAPI())->getData();
        $this->advertise = $advertise['values'];
    }

    public function getOneAdvertise($id){
        $this->value = $id;
       return $this->advertise[$id];
    }
    public function getCount(){
        return count($this->advertise);
    }

}

