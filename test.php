<?php
  $dsn = 'mysql:host=localhost:3308;dbname=projetAuthentificationBDD';
  $username= 'user_php';
  $password = '3f7zhhRn4NH69R';

  try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupere les utilisateurs

    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les utilisateurs

    foreach($users as $user){
        "ID : " . $user['idUser'] . "<br>";
        "Nom : " . $user['name'] . "<br>";
        "Prenom : " .$user['surname'] . "<br>";
        "Email : " . $user['email'] . "<br>";
        echo '<br>';
    }

  }catch(Exception $e){
    echo 'Erreur de connexion à la base de données :'. $e->getmessage();
  }



?>