
<?php
require '_structure.php';
include '_view-single.php';
?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <div class="card container m-4 p-4">
        <h3><?php echo $annonce['title']; ?></h3>        
        <p class="text-bold">Description :</p>
        <p><?php echo $annonce['description']; ?></p>
        <hr>
        <p class="text-bold">Code postal :</p>
        <p><?php echo $annonce['postal_code']; ?></p>
        <hr>
        <p class="text-bold">Ville :</p>
        <p><?php echo $annonce['city']; ?></p>
        <hr>
        <p class="text-bold">Type :</p>
        <p><?php echo $annonce['type']; ?></p>
        <hr>
        <p class="btn btn-success col-2"><?php echo $annonce['price']; ?>€</p>
        
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 600px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 333px;"></div>
    </div>
</main>

