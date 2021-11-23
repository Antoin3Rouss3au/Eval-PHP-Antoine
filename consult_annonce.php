<?php

require 'database.php';
 
    $search = null;
    $Annonces = $connexion->query('SELECT * FROM advert')->fetchAll();
   

   
    if (isset($_GET['search'])) {
        $search = htmlspecialchars(trim($_GET['search']));
        $sql = 'SELECT * FROM advert WHERE title LIKE :search OR description LIKE :search OR price LIKE :search OR city LIKE :search OR type LIKE :search OR postal_code LIKE :search';
        $reqAnnonces = $connexion->prepare($sql);
        $reqAnnonces->bindValue(':search', "%$search%");
        $reqAnnonces->execute();
        $Annonces = $reqAnnonces->fetchAll();
    }

