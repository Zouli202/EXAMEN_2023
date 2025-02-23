<?php 
    require ('bdd.php');

    if (isset($_POST['Ajouter'])) {
        $nom=$_POST['nom'];
        $desc=$_POST['desc'];
        $cpt=$_POST['cap'];
        $add=$_POST['add'];
        $tel=$_POST['tel'];
   

     // Nom du fichier
    $image = $_FILES['image']['name'];
    // Chemin de destination pour le fichier
    $destination = 'img/' . $image; 
    
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                $req = "INSERT INTO marche(nommarche,description,capacite,adresse,telephone,image) VALUES(?,?,?,?,?,?)";
                $stmt =$bdd->prepare($req);
                //die(var_dump($nom,$prenom,$tel,$poste,$equipe));
                $stmt->execute([$nom,$desc,$cpt,$add,$tel,$image]);
                echo " <script> alert('Ajouter avec succcès')</script>";
                header("refresh:0.1; url= index.php");
       }else {
         echo "Erreur lors du téléchargement du fichier.";
       }
           
    }
?>