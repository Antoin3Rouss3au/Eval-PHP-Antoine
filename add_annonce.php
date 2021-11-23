<?php
    require '_structure.php';
    require_once 'database.php';

    $alert = false;

    if (isset($_GET["error"])) {
        $alert = true;
        if ($_GET['error'] == "missingInput") {
            $type = "secondary";
            $message = "Les champs requis sont vides";
        }
        
        if ($_GET['error'] == "unknownError") {
            $type = "warning";
            $message = "Une erreur s'est produite, réessayer ultérieurement.";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Annonces</title>
</head>
<body>
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <form action="add_annonce_post.php" method="post" class="container" enctype="multipart/form-data">
        <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre de votre annonce</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre de votre annonce" name="title"
                required>
        </div>        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"
                required></textarea>
        </div>
        <div class="form-group">
            <label for="postal">Code Postal :</label>
            <input type="number" name="postal_code" min="9999" max="99999" class="form-control" id="postal" placeholder="Code Postal">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ville</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ville" name="city"
                required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Type d'annonce</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Location ou vente" name="type"
                required>
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Prix" name="price"
                required>
        </div>   
        <div class="mb-3">
            <input type="submit" class="btn btn-outline-success btn-lg" value="Ajouter produit"/>
        </div>

    </form>

</main>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>
