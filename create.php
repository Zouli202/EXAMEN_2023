<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap-5/js/bootstrap.min.js">
    <title></title>
</head>

<body>
    <div class="container mt-5">
       
        <div class="col-md-12 shadow p-3 bg-body rounded">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="trt.php" enctype="multipart/form-data">

                        <div class="row col-md-12">
                        <div >
                            <label for="" class="form-label col-md-2 ">Nom du marché *</label>
                            <input type="text" name="nom" class="form-control " required>
                        </div>
                        <div >
                            <label for="" class="form-label col-md-2">Description *</label>
                            <textarea type="text" name="desc" class="form-control w-50" required></textarea>
                        </div>
                        <div >
                            <label for="" class="form-label col-md-2 ">Capacité du marché *</label>
                            <input type="number" name="cap" class="form-control " required>
                        </div>
                        <div >
                            <label for="" class="form-label col-md-2 ">Adresse </label>
                            <input type="text" name="add" class="form-control " required>
                        </div>
                        <div >
                            <label for="" class="form-label col-md-2 ">Téléphone </label>
                            <input type="text" name="tel" class="form-control " required>
                        </div>
                        <div class="">
                            <div>
                                <label for="photo" class="col-md col-form-label">Image</label>
                                <input id="photo" name="image" type="file" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="d-flex">    
                            <a href="index.php"><button class="col-md-1btn btn-danger mt-2">Annuler</button></a>
                            <input name="Ajouter" type="submit" class="col-md-1 offset-md-9 btn btn-primary mt-2" value="Enregistrer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>