<?php
$host = 'localhost';
$dbname = 'ma base';
$username = 'root';
$password = '';
if(isset($_POST['submit'])){
  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
  // récupérer les valeurs 
  $nom = $_POST['nom']; 
  $prenom = $_POST['prenom'];
  $email = $_POST['email']; 
  $mdp = $_POST['mdp'];
  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `user`(nom,prenom,email,password) VALUES (:nom,:prenom,:email,:mdp)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":email"=>$email,":mdp"=>$mdp));
  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo"Inscription effectuer avec succes!!";
  }else{
    echo"Echec lors de l'inscription!";
  }
}
?>