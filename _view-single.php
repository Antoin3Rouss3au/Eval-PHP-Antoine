<?php

require 'database.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

    $viewAnnonce = "SELECT * from advert WHERE id = :id";
    $reqviewAnnonce = $connexion->prepare($viewAnnonce);
    $reqviewAnnonce->bindValue(':id',$id);

    $reqviewAnnonce->execute();
    $annonce = $reqviewAnnonce->fetch();
    if(empty($annonce)){
        echo "Erreur";
        exit();
    }

