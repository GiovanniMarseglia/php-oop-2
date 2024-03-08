<?php
    include_once __DIR__ ."/main.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>e-commerce</title>
</head>
<body>

    <div class="container-fluid">
        <div class="container">
        <h1 class="text-center">My Pet Shop</h1>
        <div class="row row-cols-3 g-5">
            <?php
                foreach($product_istance as $element){
                    ?>
                    <div class="col">
                <figure class="position-relative w-100">
                    <img class="w-100" src="<?php echo $element->img?>" alt="">
                    <!-- <i class="position-absolute"></i> -->
            
                    <i class="position-absolute fa-solid fa-<?php echo $element->animal?> rounded-circle bg-light rounded-circle p-1" style="top:5px; right:5px"></i>
                           

                        
                </figure>
                <h2><?php echo $element->name?></h2>
                <div class="d-flex">
                    <span>Price:</span>
                    <span><?php echo $element->prezzo?></span>
                    <span>€</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>
                        <span>Type:</span>
                        <span><?php echo $element->type?></span>
                    </div>
                    
                        <div>
                        <?php if(isset($element->calories)){?>
                            <span>Calories:</span>
                            <span><?php echo $element->calories?></span>
                            <?php }?>
                        <?php if(isset($element->namegenre)){?>
                        <span>Genre:</span>
                        <span><?php echo $element->namegenre?></span>
                        <?php }?>

                        </div>
                    

                </div>
            </div>
                
            <?php
                }
            ?>
            

        </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>