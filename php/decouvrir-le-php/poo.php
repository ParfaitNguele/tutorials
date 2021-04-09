<?php
class Calculatrice {

  public $v1 = 7;
  public $v2 = 9;

  public function additionne(){
    $s = $this->v1 + $this->v2;
    echo $s."<br/>";
  }
  public function soustrait(){
    $d = $this->v2 - $this->v1;
    echo $d."<br/>";
  }
  public function divise(){
    $r = $this->v1 / $this->v2;
    echo $r."<br/>";
  }

  }

  $maCalculatrice = new Calculatrice;
  $maCalculatrice->additionne();
  $maCalculatrice->soustrait();
  $maCalculatrice->divise();
?>
