<?php
//Classe basique avec usage de $this
  class Person{
    public $age = 100;
    const NAME = "NGUELE Parfait";

    public function sayHello(){
      print "Hello world";
    }

    public function createMessage(){
      $message = "Vous avez ".$this->age." ans";
      return $message;
    }

    public function displayMessage(){
      $builtSms = $this->createMessage();
      print $builtSms;
    }

    public function showName(){
      print "Votre nom est : " . self::NAME;
    }
  }

//Héritage en PHP
  class A
  {
    public function showMessage(){
      print "Bonjour depuis le Cameroun !<br/>";
    }
    public function calculate($a, $b, $c){
      $r = ($a * $b) / $c;
      print $r;
    }
  }
  class B extends A
  {

  }
//Création de class avec constructeur

  class Employee
  {
    public $age;

    public function __construct($age){
      $this->age = $age;
    }
    public function printMessage(){
      echo "Hello world";
    }
  }
  //Appeler un constructeur parent sur l'enfant
  class Trainee
  {
    public function __construct(){
      print "Votre compte stagiaire a été créé !";
    }
  }
  class Anne extends Trainee
  {
    public function __construct(){
      parent::__construct();
    }
  }
//Visibilité des éléments en POO PHP
  class Worker
  {
    protected $name = "Nguele Parfait";
    public $fav_color = "Black";
    private $card_number = "145235589522";

    protected function showSecretCode(){
      print "Votre code secret est : mandbcjfhdb15*5";
    }

    public function greet(){
      echo "Hello from Cameroon !";
    }

    private function showCardNumber(){
      print "Numéro de card : ".$this->card_number;
    }
  }

  class Son extends Worker
  {
    public function showProtectedCode(){
      $this->showSecretCode();
    }

    public function showProtectedName(){
      print $this->name."<br/>";
    }

    public function initCardNumShow(){
      $this->showCardNumber();
    }
  }

//Éléments statiques en POO PHP

class Phone
{
  public static $number = "14235687";
  public static $brand = "iPhone";

  public static function showFillings(){
    print "Je suis content d'avoir un iPhone !";
  }

  public static function createSmsWithBrand(){
    $message = "Votre marque de téléphone est : " . self::$brand;
    return $message;
  }

  public static function showSmsWithBrand(){
    $sms = self::createSmsWithBrand();
    print $sms;
  }
}

class IPhone20 extends Phone
{
  public function editPhoneNumber(){
    $newNumber = parent::$number . "iPhone";
    return $newNumber;
  }
  public function printPhoneNumb(){
    //Phone number
    $nbr = $this->editPhoneNumber();
    print "Le numéro du téléphone est : " . $nbr . "<br/>";
    //fillings
    parent::showFillings();
  }
}

//Abstraction en POO PHP

  abstract class Family
  {
    abstract public function listFamilyMembers(){}
    abstract public function showFatherName(){}

    public function showFinalMessage(){
      print "Vous venez de créer votre famille avec succès !";
    }
  }
 ?>
