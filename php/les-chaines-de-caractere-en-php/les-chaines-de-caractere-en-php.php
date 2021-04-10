<?php
  class Chaines
  {
    public $maChaine1 = "Bonjour le monde !";
    public $maChaine2 = 'HELLO WORLD !';
    public $maChaine3 = "Hello'\\";
    public $maChaine4 = "Crochets[\]";
    public $salt = "pvfnvnnfnf";
    public $password = "Mon_mot_de_passe_secret";
    public $couleurs = "Bleu Jaune Vert Rose Blanc";
    public $html = "<a href='https://www.parfait-nguele.com/'>Mon lien</a>";
    public $html_converti = "&lt;a href=&#039;https://www.parfait-nguele.com/&#039;&gt;Mon lien&lt;/a&gt;";
    public $mon_tableau = array("Moto", "Voiture", "Vélo", "Train");
    public $mois = "Avril";
    public $nom = "nguele parfait";
    public $c1 = "bonne";
    public $c2 = "sonne";
    public $c3 = "maire";
    public $string = "paire maire";

    //Pour échapper les caractères ' \ et "
    public function echappe(){
      $a = addslashes($this->maChaine3);
      echo $a; //affiche : Hello\'\\
    }

    //Pour echapper une liste de caractères de votre choix
    public function echappe2(){
      $a = addcslashes ( $this->maChaine4 , "[\]C" );
      echo $a; //affiche : \Crochets\[\\\]
    }

    /*Permet de scinder une chaine en ajoutant un séparateur de votre choix
    après le nombre de caractères indiqués*/
    public function scinde(){
      $a = chunk_split ( $this->maChaine1 , 4 , "|" );
      echo $a; //affiche : Bonj|our |le m|onde| !|
    }

    //Pour hacher à sens unique (indéchiffrable)
    public function ache(){
      $a = crypt ( $this->password , $this->salt );
      echo $a; //affiche : pv5jCAQXOOqDg
    }

    //Pour transformer une chaine de caractères en tableau, en la découpant au caractère que vous indiquez
    public function transformeEnTableau(){
      $a = explode(" ", $this->couleurs);
      var_dump($a);
      /*
      RÉSULTAT
      array (size=5)
        0 => string 'Bleu' (length=4)
        1 => string 'Jaune' (length=5)
        2 => string 'Vert' (length=4)
        3 => string 'Rose' (length=4)
        4 => string 'Blanc' (length=5)
      */
    }

    //Convertit les caractères spéciaux HTML
    public function convertit(){
      $a = htmlspecialchars($this->html, ENT_QUOTES);
      echo $a; //affiche : <a href='https://www.parfait-nguele.com/'>Mon lien</a>
      var_dump($a); //C:\Wamp_64_v_3.2.3\www\tutos\chaines.php:57:string '&lt;a href=&#039;https://www.parfait-nguele.com/&#039;&gt;Mon lien&lt;/a&gt;' (length=76)
    }

    //Reproduit le code HTML converti
    public function retourneLeHtml(){
      $a = htmlspecialchars_decode($this->html_converti, ENT_NOQUOTES);
      echo $a;//Affiche : Mon lien
    }

    //Transforme un tableau en chaine de caractères, en séparant les éléments par le séparateur que vous indiquez
    public function transformeLeTableauEnChaine(){
      $a = implode(",", $this->mon_tableau);
      echo $a;//Affiche : Moto,Voiture,Vélo,Train
    }

    //Met le premier caractère d'une chaine en minuscule
    public function metLePremierCaractereEnMinuscule(){
      $a = lcfirst($this->mois);
      echo $a;//Affiche : avril
    }

    //Calcule le sha1 d'une chaine de caractère
    public function calculeLeSha1(){
      $a = sha1($this->password);
      print $a;//Affiche : 30d1cc248b6fa34c1b42464924a068bdc323668d
    }

    //Calcule la similarité entre deux chaines de caractères
    public function calculeLaSimilarite(){
      $a = similar_text($this->c1, $this->c2);
      $b = similar_text($this->c1, $this->c3);
      print $a."<br/>";//Affiche : 4
      print $b."<br/>";//Affiche : 1
    }

    //remplace toutes les occurences d'une chaine de caractère dans une autre chaine de caractère. Insensible à la casse
    public function remplace(){
      $count = 2;
      $a = str_ireplace("ai", "è", $this->string);
      $b = str_ireplace("ai", "è", $this->string, $count);
      print $a;//Affiche : paire maire
      print $b;//Affiche : paire maire
    }

    //Repete une chaine de caractère le nombre de fois indiqué
    public function repeteLaChaine(){
      $times = 5;
      $a = str_repeat ( $this->c1 , $times );
      print $a;//Affiche : bonnebonnebonnebonnebonne
    }

    //Mélange les caractères d'une chaine
    public function melange(){
      $str = "unechainedecaractère";
      $a = str_shuffle ( $str );
      print $a;//Affiche une chaine aléatoire à chaque exécution du code
    }

    //Compte le nombre de mots trouvés dans une chaine de caractère
    public function compte(){
      $str = "Une chaine de caractère";
      $a = str_word_count($str);
      print $a;//Affiche : 5 (très étrange)
    }
    //Supprime les balises HTML et PHP d'une chaine de caractère
    public function supprime(){
      $str = "<script></script><p>Un paragraphe</p><?php ?>";
      $a = strip_tags($str);
      print $a;//Affiche : Un paragraphe
    }

    //Calcule la taille d'une chaine de caractère
    public function calculeLaTaille(){
      $str = "une chaine de caractère";
      $a = strlen ( $str );
      print $a;//Affiche : 24
    }

    //Inverse une chaine de caractère
    public function inverse(){
      $str = "Une chaine";
      $a = strrev ( $str );
      print $a;//Affiche : eniahc enU
    }

    //Met un chaine en minuscule
    public function metEnMinuscule(){
      $str = "MA CHAINE";
      $a = strtolower ( $str );
      print $a;//Affiche : ma chaine
    }

    //Met en majuscules
    public function metEnMajuscule(){
      $str = "ma chaine";
      $a = strtoupper ( $str );
      print $a;//Affiche : MA CHAINE
    }

    //Supprime les espaces de début et de fin
    public function supprimeLesEspaces(){
      $str = " Ma chaine ";
      $a = trim($str);
      print $a;// Affiche : Ma chaine (sans espace au début et à la fin)
    }

    //Met le premier caractère en majuscule
    public function metLePremierCaractereEnMaj(){
      $str = "ma chaine";
      $a = ucfirst ( $str );
      print $a;//Affiche : Ma chaine
    }

    //Met en majuscule la première lettre de tous les mots
    public function modifie(){
      $str = "une autre chaine";
      $a = ucwords($str);
      print $a;//Affiche : Une Autre Chaine
    }
  }
  //
  $str = new Chaines;
  //$str->echappe();
  //$str->echappe2();
  //$str->scinde();
  //$str->ache();
  //$str->transformeEnTableau();
  //$str->convertit();
  //$str->retourneLeHtml();
  //$str->transformeLeTableauEnChaine();
  //$str->metLePremierCaractereEnMinuscule();
  //$str->calculeLeSha1();
  //$str->calculeLaSimilarite();
  //$str->remplace();
  //$str->repeteLaChaine();
  //$str->melange();
  //$str->compte();
  //$str->supprime();
  //$str->calculeLaTaille();
  //$str->inverse();
  //$str->metEnMinuscule();
  //$str->metEnMajuscule();
  //$str->supprimeLesEspaces();
  //$str->metLePremierCaractereEnMaj();
  //$str->modifie();
?>
