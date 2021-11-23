<?php
    
    require '_structure.php';
    require 'consult_annonce.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>   
    <section>
        <?php
            foreach ($Annonces as $Annonce) {
        ?>        
            <div class="card" style="width: 18rem;">
                <div class="card-body">                
                    <h3 class="card-title" style="text-transform: uppercase;"><?php echo $Annonce['title']; ?></h3>
                    <p class="card-text"><?php echo $Annonce['description']; ?></p>
                    <p class="card-text"><?php echo $Annonce['type']; ?></p>                
                    <p class="card-text"><?php echo $Annonce['city']; ?></p>                
                    <a href="#" class="btn btn-success"><?php echo $Annonce['price']; ?>€</a>        
                    <a href="consult_one.php" class="btn btn-success">Consulter cette annonce</a>        
                </div>
            </div>        
        <?php
            }
        ?>

    </section>
    


    
</body>

</html>