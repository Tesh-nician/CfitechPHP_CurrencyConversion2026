<?php

 class Conversion {

    private float $source; //montant a convertir
    private string $pays; // de quelles pays en quelle pays
    private float $result; //le resultat du conversion
    private DateTime $date; //date ou le conversion a ete effectuee;
    function __construct(float $source, string $pays, float $result){
    $this->source = $source;
    $this->pays = $pays;
    $this->result = $result;
    $this->date = new DateTime('now');
    }

     public function getSource(): float
     {
         return $this->source;
     }

     public function getPays(): string
     {
         return $this->pays;
     }

     public function getResult(): float
     {
         return $this->result;
     }

     public function getDate(): DateTime
     {
         return $this->date;
     }




}


?>