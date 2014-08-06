<?php
namespace Molfarius\myreposytory;
  class House {
    
public $rooms;
public $square;
public $people;
public $numberhouse;
public $floor;
public $porche;
public $appartment;
public $housesquare;


const teplo=14.95;
const svet=2.35;
const hotwater = 6.98;
const coldwater= 3.45;
const canalization= 6.34;
const gaz=15.35;
const tbo=1.45;
 const AT = 11.31; // на 1 квартиру - 1 человек  (S двор.територии = 3,9 кв.м/человека х 2,9)

public function __construct( $rooms, $square, $people, $numberhouse, $floor, $porche, $appartment, $housesquare)
 {     
 $this->rooms = $rooms;
 $this->square = $square;
 $this->people = $people;
 $this->numberhouse= $numberhouse;
 $this->floor = $floor;
 $this->porche = $porche;
 $this->appartment = $appartment;
 $this->housesquare = $housesquare;
    }

public function teplo(){
return $this-> square * self::teplo;
}
public function svet(){
return $this-> square * self::svet;
}
public function hotwater(){
return $this-> people * self::hotwater;
}
public function coldwater(){
return $this-> people * self::coldwater;
}
public function canalization(){
return $this-> people * self::canalization;
}
public function gaz(){
return $this-> rooms * self::gaz;
}
public function tbo(){
return $this-> rooms * self::tbo;
}
public function sum(){
    return (($this-> square * self::teplo)+($this-> square * self::svet)+($this->people * self::hotwater)+($this->people * self::canalization)+($this->rooms * self::gaz)+($this->rooms * self::tbo));
}
public function numberhouse(){
     return $this->numberhouse;
}
public function alltaxes(){
  return ($this->sum()*$this->floor*$this->porche*$this->appartment);
}
public function taxessquare(){
    return ($this->square *$this->floor*$this->porche*$this->appartment*self::AT);
}
    }
    
    $aMember = new House( $rooms=rand(0, 3),  $square=rand(21, 36), $people=rand(2, 6), $_POST['floor'], $_POST['porche'],$_POST['appartment'],$_POST['numberhouse'],$_POST['housesquare']);
    echo "<p>Номер Вашего дома :</p>";
     echo $aMember->numberhouse() ;
echo "<p>Ваш счёт коммунальных платежей за весь дом  :</p>";
    echo $aMember->alltaxes();
    echo "<p>Ваш налог на землю составляет  :</p>";
    echo $aMember->taxessquare();
?>
