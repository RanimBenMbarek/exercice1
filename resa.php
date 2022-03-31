<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Livraison</title>
</head>
<body>
<fieldset>
    <form class="was-validated" enctype="multipart/form-data" action="recap.php" method="post">
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">nom :</label>
            <input type="text" name="nom" class="form-control is-invalid" id="validationTextarea" placeholder="please enter your lastname"></input>

        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">prenom :</label>
            <input type="text"  name="prenom" class="form-control is-invalid" id="validationTextarea" placeholder="please enter your firstname"></input>

        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">nombre de sandwitchs :</label>
            <input type="number"  name="nombre_sandwitchs" class="form-control is-invalid" id="validationTextarea" placeholder="enter a number" required></input>

        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Adresse :</label>
            <input type="text" class="form-control is-invalid" id="validationTextarea" placeholder="enter your adresse"></input>

        </div>
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">CIN :</label>
            <input type="file" class="form-control" aria-label="file example" type="file" name="CIN" id="CIN" required>

        </div>

        <div class="form-check mb-3">
            <label class="form-check-label" for="validationFormCheck1"> les ingrédients à ajouter :</label> <br>
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" >
            <label class="form-check-label" for="validationFormCheck1">Harissa</label> <br>
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" >
            <label class="form-check-label" for="validationFormCheck1">Salade</label> <br>
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" >
            <label class="form-check-label" for="validationFormCheck1">Mayo</label>

        </div>

        <div class="form-check mb-3">
            <label >Type de sandwitchs :</label> <br>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
            <label class="form-check-label" for="validationFormCheck2">Poulet</label> <br>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
            <label class="form-check-label" for="validationFormCheck2">Viande</label> <br>
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
            <label class="form-check-label" for="validationFormCheck2">Escalope</label>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit" >Submit form</button>
        </div>
    </form>
</fieldset>
</body>
</html>