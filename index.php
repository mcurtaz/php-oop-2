<?php
  
 class Square { // creo classe quadrato
   
  public $side;

  public function __construct($s){
    $this -> side = $s;
  }

  public function getPerimeter(){ //metodo che calcola il perimetro lato * 4
    return $this -> side * 4;
  }

  public function getArea(){ //metodo che calcola l'area lato * lato
    return $this -> side * $this -> side;
  }

  public function getString(){ // funzione che genera una stringa che utilizzerò nel __toString()
    return "Side: " . $this -> side
        . "<br> Perimeter: " . $this -> getPerimeter()
        . "<br> Area: " . $this -> getArea();
  }

  public function __toString(){ // concateno il "titolo" con la stringa restituita dalla funzione getString()

    return "Square<br>" . $this -> getString();

  }
 }

 class Cube extends Square {  // creo classe Cubo che estende la classe quadrato
   
  // ometto il __construct che essendo uguale al construct di Square viene semplicemente ereditato

  public function getVolume(){ // calcolo il volume del cubo che è area del quadrato * lato (lato * lato * lato)
    return parent::getArea() * $this -> side; 
  }

  public function getSurface(){ // calcolo la superficie del cubo che è area del quadrato * 6 (lato * lato * 6)
    return parent::getArea() * 6;
  }

  public function getString(){ // modifico la getString per stampare i dati del volume e della superficie
    return "Side: " . $this -> side
        . "<br> Volume: " . $this -> getVolume()
        . "<br> Surface: " . $this -> getSurface();
  }

  public function __toString(){

    return "Cube<br>" . $this -> getString();

  }
 }

 // creo e stampo istanze Square e Cube

 $sq1 = new Square(10);

 echo $sq1 . "<br><br>";

 $sq2 = new Square(5);

 echo $sq2 . "<br><br>";

 $cb1 = new Cube(10);

 echo $cb1 . "<br><br>";

 $cb2 = new Cube(5);

 echo $cb2 . "<br><br>";





