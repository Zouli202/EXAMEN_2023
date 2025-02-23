
<?php 
    require 'bdd.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap-5/js/bootstrap.min.js">
    <title></title>
</head>
<body>
    <?php
            $req='select* from marche';
            $stmt=$bdd->prepare($req);
            $stmt->execute();
            $marche=$stmt-> fetchAll();
            do {?>
                <?php foreach ($marche as $marche) : ?>
                    <section class="container my-2">
                        <div>
                            <img style="width: 100px;heigth: 100px;" class="img-thumbnail col-md-3" src="img/<?= $marche['image'] ?>" alt="<?= $marche['nommarche']?>" class="">
                            <!-- <h2><?php //$marc['nommarche']?></h2> -->
                            <p>capacité: <?= $marche['capacite'] ?> places</p>
                        </div>
                    </section>
                <?php endforeach ?>
                <?php } while ($marche <= 3); ?>
              
       
        <!-- <img src='admin/img/categorie/$img' alt=''> -->
             
    <a href="create.php"><button type='submit' class='btn btn-primary'>AJOUTER</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
