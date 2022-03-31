<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php //gérer l'upload de fichiers
$uploaddir = './uploads/';
$file  = $uploaddir . basename($_FILES['CIN']['name']);

if (move_uploaded_file($_FILES['CIN']['tmp_name'], $file)) {
  echo "Success";
} else {
    echo "Error";
}

$nom=htmlentities($_POST["nom"]);
$prenom=htmlentities($_POST["prenom"]);
$nbre=htmlentities($_POST["nombre_sandwitchs"]);
//$type=htmlentities($_POST["ingrédients"]);
//$ing=$_POST["ingrédients"];
//var_dump($_POST);
$nbre=$nbre*4;
if($nbre > 10){
    $nbre=$nbre-0.1*$nbre;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Votre livraison</title>
</head>
<body>
<ul class=>
    <li class="list-group-item"><?php echo "$nom $prenom vous avez commande $nbre sandwitch(s)"; ?></li>
    <li class="list-group-item"><?php echo "le prix de votre commande = $nbre dt"; ?></li>
</ul>
</body>
</html>