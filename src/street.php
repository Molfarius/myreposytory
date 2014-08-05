<?php

  class Street {
    
public $rooms;
public $square;
public $people;
public $numberhouse;
public $floor;
public $porche;
public $appartment;
public $housesquare;
public $namestreet;
public $lenght;
public $first;
public $last;
public $housenumbers;

const teplo=14.95;
const svet=2.35;
const hotwater = 6.98;
const coldwater= 3.45;
const canalization= 6.34;
const gaz=15.35;
const tbo=1.45;
 const AT = 11.31; // на 1 квартиру - 1 человек  (S двор.територии = 3,9 кв.м/человека х 2,9)

public function __construct( $rooms, $square, $people, $numberhouse, $floor, $porche, $appartment, $housesquare, $namestreet,$lenght, $first,$last,$housenumbers)
 {     
 $this->rooms = $rooms;
 $this->square = $square;
 $this->people = $people;
 $this->numberhouse= $numberhouse;
 $this->floor = $floor;
 $this->porche = $porche;
 $this->appartment = $appartment;
 $this->housesquare = $housesquare;
 $this->namestreet = $namestreet;
 $this->lenght = $lenght;
 $this->first = $first;
 $this->last = $last;
 $this->housenumbers = $housenumbers;

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
    
    public function squrehouse () {
       return( $this->floor*$this->porche*$this->appartment);
}
     
    public function allforregion()
    {
         return ($this->alltaxes()*$this->lenght);
    }
    public function dvornik()
    {
        return(ceil(($this->lenght)/$this->squrehouse()));
}
    }
    $aMember = new Street( $rooms=rand(0, 3),  $square=rand(21, 36), $people=rand(2, 6),$floor=rand(2,18), $porche=rand(1,9),$appartment=rand(2,4),$numberhouse=rand(1,250),$housesquare=rand(45,72), $_POST['namestreet'], $_POST['lenght'], $_POST['first'], $_POST['last'], $_POST['housenumbers']);
    
    echo "<p>Протяжённость улицы :</p>";
    echo $aMember->numberhouse() ;
    echo "<p>Ваш счёт коммунальных платежей за всю улицу  :</p>";
    echo $aMember->allforregion();
    echo "<p>Кол-во дворников необходимо:</p>";
    echo $aMember->dvornik();
?>


