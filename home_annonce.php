<?php

require 'database.php';
 
    $search = null;
    $lines = $connexion->query('SELECT * FROM advert ORDER BY id DESC limit 15')->fetchAll();
   

   
    if (isset($_GET['search'])) {
        $search = htmlspecialchars(trim($_GET['search']));
        $sql = 'SELECT * FROM advert WHERE title LIKE :search OR description LIKE :search OR price LIKE :search OR city LIKE :search OR type LIKE :search OR postal_code LIKE :search';
        $reqLines = $connexion->prepare($sql);
        $reqLines->bindValue(':search', "%$search%");
        $reqLines->execute();
        $lines = $reqLines->fetchAll();
    }

