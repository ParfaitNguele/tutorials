//Objet simple

class Personne{

  nom = "Nguele";
  prenom = "Parfait Emmanuel";
  age = 100;

  nom_complet = this.nom + " " + this.prenom;

  static sexe = "Homme";

  salue(salutation){
    console.log(salutation);
  }
  calcule(age){
    let r = age / 2;
    return r;
  }
  affiche(age){
    let d = this.calcule(age);
    console.log("Votre âge divisé par 2 donne : " + d);
  }
  static donneHeureDate(){
    let date = new Date;
    console.log(date);
  }
}

//Objet avec contructeur

class Etudiant
{
  nom;
  prenom;
  age;
  sexe;
  action;

  constructor(nom_etudiant, prenom_etudiant, age_etudiant, sexe_etudiant, action_etudiant){
    this.nom = nom_etudiant;
    this.prenom = prenom_etudiant;
    this.age = age_etudiant;
    this.sexe = sexe_etudiant;
    this.action = action_etudiant;
  }
}

let nouvelEtudiant = new Etudiant("Nguele", "Parfait Emmanuel", 100, "Homme", function(){let date = new Date;
    console.log(date);});

//Héritage en POO Javascript
class A {
  salue(){
    console.log("Je vous salue depuis le Cameroun !");
  }
  calcule(a, b){
    let r = a + b;
    console.log("L'opération donne : " + r);
  }
}
class B extends A
{

}
