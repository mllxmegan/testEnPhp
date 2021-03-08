<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php</title>
</head>
<body>
<h1>Les Variables</h1>
<h2> EXO 1</h2>
<p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix.
</p>
<?php 
$nom = 'Patoche';
echo $nom;
?>
  <h2>Exo 2</h2>  
  <p>Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. </p>
<?php
$nom = 'Swayze';
$prenom = 'Patrick';
$age = 80;
echo $nom, $prenom, $age;
?>
<h2>Exo 3</h2>
<p>Créer une variable «km» . L'initialiser à 1. Acher son contenu. Changer sa valeur par 3.
Acher son contenu. Changer sa valeur par 125. Acher son contenu.</p>
<?php
$km = 1;
echo $km; 
$km = 3;
echo $km; 
$km = 125;
echo $km; 
?>
<h2>Exo 4</h2>
<p>Créer une variable de type string, une variable de type int, une variable de type oat,
une variable de type booléan et les initialiser avec une valeur de votre choix.</p>
<?php
$string = 'blablabla';
$int = 42;
$float = 0.666;
$booleen = true; 
echo $string, $int, $float,$booleen;
?>
<h2>Exo 5</h2>
<p>Créer une variable de type int. L'initialiser avec rien. Acher sa valeur.
Donner une valeur à cette variable et l'acher.</p>
<?php
$int = NULL ;
echo $int ;
$int= 42;
echo $int;
?>
<h2>Exo 6</h2>
<p>Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
Acher : "Bonjour" + nom + ", comment vas tu ?".
</p>
<?php
$nom='Patoche';
echo "Bonjour $nom comment vas tu ?";
?>
<h2>Exo 7</h2>
<p>Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. Acher : "Bonjour" + nom + prenom + ",tu as" + age + "ans"</p>
<?php
$nom="Swayse";
$prenom="Patoche";
$age= 85;
echo "Bonjour $nom $prenom, tu as $age ans"
?>
<h2>Exo 8</h2>
<p>Créer 3 variables.
Dans la première mettre l'adition qui donne le résultat 7.
Dans la deuxième mettre la multiplication qui donne le résultat 100.
Dans la troisième mettre la division qui donne le résultat 5.</p>
<?php
$addition= 4 + 3; 
$multi= 50 * 2; 
$div= 10 / 2; 
echo $addition,$multi,$div;
?>

<h1>Les boucles</h1>

<h2> EXO 1</h2>
<p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10 :
=> l'acher => incrémenter de 1</p>
<?php
$repetition = 0;
while ($repetition < 10)
{
echo '<p> Tricher c\'est bien !</p>';
$repetition++;
};
?>

<h2> EXO 2</h2>
<p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :
=> multiplier la première variable avec la deuxième
=> acher le résultat
=> incrémenter la première variable</p>
<?php
$variable2 = 5;
for ($variable1=0; $variable1<20;$variable1++)
{
$resultat= $variable1*$variable2;
echo $resultat;

};
?>
<h2> EXO 3</h2>
<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
=> soustraire la première variable avec la deuxième
=> acher le résultat
=> décrémenter la première variable</p>
<?php

$variable4=5;
for ($variable3=100;$variable3>=10;($variable3-=$variable4))
{
$resultat= $variable3-$variable4;
echo $resultat;
};
?>

<h2> EXO 4</h2>
<p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :
=> l'acher
=> l'incrementer de la moitié de sa valeur</p>
<?php
$variable=1;
while ($variable < 10)
{
  echo ' '.$variable.' '; 
  $variable+=($variable/2);
}
?>

<h2> EXO 5</h2>
<p>En allant de 1 à 15 avec un pas de 1, acher le message On y arrive presque...</p>
<?php
for ($repetition=1; $repetition<16; $repetition++)
{
  echo '<p> On y arrive presque '. $repetition .' fois </p>';
};
?>

<h2> EXO 6</h2>
<p>En allant de 20 à 0 avec un pas de 1, acher le message C'est presque bon...</p>
<?php
for ($repetition=20; $repetition>=0; $repetition--)
{
echo '<p> C\'est presque bon '.$repetition .' fois</p>';
};
?>
<h2> EXO 7</h2>
<p>En allant de 1 à 100 avec un pas de 15, acher le message On tient le bon bout...</p>
<?php
for ($repetition=1; $repetition<=100; $repetition+=15)
{
  echo '<p> On tient le bout '.$repetition .' </p>';
};
?>
<h2> EXO 8</h2>
<p>En allant de 200 à 0 avec un pas de 12, acher le message Enn ! ! !</p>
<?php
for ($repetition = 200; $repetition > 0;) {
  $repetition= $repetition - 12;
  echo "<br>$repetition Enfin !";
}
?>

<h1>Les Fonctions</h1>
<h2>Exo 1</h2>
<p>Faire une fonction qui retourne true.</p>
<?php
function truc() {
    $firstName = "Barney";
    $god = true;
    if ($god == true) {
        echo "$firstName est le meilleur personnage de tout les temps";
    }
    else {
        echo "Au pire c'est le deuxième devant Abed";
    }
}
truc();
?>
<h2>Exo2</h2>
<p> Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
<?php
function b($name)
{
  echo $name. ' ';
}
b('Gégé');
?>
<h2>Exo 3</h2>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit
la concaténation de ces deux chaines.</p>
<?php
function a ($first_name, $last_name)
{
  echo $first_name. ' ' .$last_name. ' ';
}
a('Patoche','Swayze');
?>
<h2>Exo 4</h2>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
=> Les deux nombres sont identiques si les deux nombres sont égaux</p>
<?php
function c($first_number, $second_number){
  if ($first_number > $second_number)
  {
      echo 'Le premier nombre est plus grand ';
  }
  elseif ($first_number<$second_number)
  {
      echo 'Le premier nombre est plus petit ';
  }
  else 
  {
      echo 'Les deux nombres sont identiques ';
  }
}
?>
<h2>Exo 5</h2>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
la concaténation de ces deux paramètres.</p>
<?php
function d ($name, $number){
  echo $name. ' ' .$number. ' ';
}
d('Gégé', 15);
?>
<h2>Exo 6</h2>
<p>Faire une fonction qui prend trois paramètres : nom, prenom et age.
Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>
<?php
function e ($first_name, $last_name, $age){
  echo 'Bonjour ' .$first_name. ' ' .$last_name. ' tu as ' .$age. ' ans';
}
e('Patoche','Swayze', 85);
?>
<h2>Exo 7</h2>
<p>Faire une fonction qui prend deux paramètres : age et genre.
Le paramètre genre peut prendre comme valeur Homme ou Femme.
La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :
=> Vous êtes un homme et vous êtes majeur
=> Vous êtes un homme et vous êtes mineur
=> Vous êtes une femme et vous êtes majeur
=> Vous êtes une femme et vous êtes mineur</p>
<?php
function f($age, $genre)
{
    $majeur = 18;
    if ($age < $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes mineur';
    }
    elseif ($age >= $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes majeur';
    }
    elseif ($age < $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
    elseif ( $age >= $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes majeur';
    }
    else 
    {
        echo 'Désolé, veuillez remplir les champs à nouveaux';
    }
}

f(12, 'Femme');
?>
<h2>Exo 8</h2>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>
<?php
function i($first_number = 1, $second_number= 1, $third_number = 1)
{
  echo $first_number + $second_number + $third_number ;
}
i(3,3,3);
?>
<h1>Les Tableaux</h1>
<h2>Exo 1</h2>
<p>Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année</p>
<?php
$mois= array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');
?>
<h2>Exo 2</h2>
<p>Avec le tableau de l'exercice 1, acher la valeur de la troisième ligne de ce tableau.</p>
<?php
echo $mois[2];
?>
<h2>Exo 3</h2>
<p>Avec le tableau de l'exercice , acher la valeur de l'index 5.</p>
<?php
echo $mois[5];
?>
<h2> Exo 4</h2>
<p>Avec le tableau de l'exercice 1, modier le mois de aout pour lui ajouter l'accent manquant.</p>
<?php
$months[7] = str_replace('u', 'û', 'Aout');
echo  '<br>' . $months[7] . '<br>';
?>
<h2> Exo 5</h2>
<p>Créer un tableau associatif avec comme index le numéro des départements
des Hauts de France et en valeur leur nom.</p>
<?php
  $hautdefrance [02] = 'Aisne';
  $hautdefrance [59] = 'Nord';
  $hautdefrance [60] = 'Oise';
  $hautdefrance [62] = 'Pas-de-Calais';
  $hautdefrance [80] = 'Somme';
?>
<h2>Exo 6</h2>
<p>Avec le tableau de l'exercice 5, acher la valeur de l'index 59</p>
<?php
echo $hautdefrance[59];
?>
<h2>Exo 7</h2>
<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
<?php
$hautdefrance [51]='Marne';
?>
<h2>Exo 8</h2>
<p>Avec le tableau de l'exercice 1 et une boucle, acher toutes les valeurs de ce tableau.</p>
<?php
for ($result = 0 ; $result < 10; $result++){
  echo $mois[$result]. '</br>';
}
?>
<h2>Exo 9</h2>
<p>Avec le tableau de l'exercice 5, acher toutes les valeurs de ce tableau.</p>
<?php
foreach ($hautdefrance as $departement){
  echo $departement. ' </br>';
}
?>
<h2>Exo 10</h2>
<p>Avec le tableau de l'exercice 5, acher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme :
"Le département" + nom_departement + "a le numéro" + num_departement</p>
<?php
foreach ($hautdefrance as $cle => $departement){
  echo 'Le département ' . $departement. ' a le numéro ' .$cle. ' </br>' ;
}
?>
</body>
</html>