<?php

require 'database.php';



if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['postal_code']) || empty($_POST['city']) || empty($_POST['type']) || empty($_POST['price'])
) {
   
} else {
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $postal_code = htmlspecialchars(floatval($_POST['postal_code']));
    $city = htmlspecialchars(trim($_POST['city']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = htmlspecialchars(floatval($_POST['price']));
}


try {
    $insertAnnonce = 'INSERT INTO advert (title,description,postal_code,city,type,price) VALUES(:title,:description,:postal_code,:city,:type,:price)';


    $reqInsertAnnonce = $connexion->prepare($insertAnnonce);
    $reqInsertAnnonce->bindValue(':title', $title, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':description', $description, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':postal_code', $postal_code);
    $reqInsertAnnonce->bindValue(':city', $city, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':type', $type, PDO::PARAM_STR);
    $reqInsertAnnonce->bindValue(':price', $price);
    $reqInsertAnnonce->execute();
    header('Location:home.php?success=insert');
} catch (PDOException $e) {
    echo $e->getMessage();

}


