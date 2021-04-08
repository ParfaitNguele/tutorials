//Création d'une variable sans lui attribuer de valeur

var nomDeMaVariable;

//Création d'une variable en lui attribuant une valeur

var chaineDeCaractere = "Ma chaine de caractère";
var nombre = 10;
var booleen1 = true;
var booleen2 = false;
var nombreDecimal = 2.5;
var tableau = ["valeur 1", 12, true];
var monObjet = {nom:"Nguele", prenom:"Parfait Emmanuel", age:100, marie:false};

//J'accède aux éléments

tableau[0]; //retourne "valeur 1"
tableau[1]; //retourne 12
tableau [2]; //retourne true

//Je récupère les valeurs de l'objet

monObjet.nom; //retourne "Nguele"
monObjet.prenom; //retourne "Parfait Emmanuel"
monObjet.age; //retourne 100
monObjet.marie; //retourne false

//Un commentaire sur une ligne

var nom = "NGUELE PARFAIT EMMANUEL";
var nomEnMinuscule = nom.toLowerCase();

/*
Un autre commentaire
sur plusieurs
lignes
*/

var nomEnMajuscule = nomEnMinuscule.toUpperCase();
