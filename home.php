<?php
    
    require '_structure.php';
    require 'home_annonce.php';
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
            foreach ($lines as $line) {
        ?>        
            <div class="card" style="width: 18rem;">
                <div class="card-body">                
                    <h3 class="card-title" style="text-transform: uppercase;"><?php echo $line['title']; ?></h3>
                    <p class="card-text"><?php echo $line['description']; ?></p>
                    <p class="card-text"><?php echo $line['type']; ?></p>                
                    <p class="card-text"><?php echo $line['city']; ?></p>                
                    <a href="#" class="btn btn-success"><?php echo $line['price']; ?>€</a>        
                </div>
            </div>        
        <?php
            }
        ?>

    </section>
    


    
</body>

</html>