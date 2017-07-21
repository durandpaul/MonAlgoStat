<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Algorithmes de tri</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<h1>Algorithmes de tri</h1>

<p>
<form action="/data.php">
    Veuillez choisir le nombre d'éléments à trier :
    <select name="elementATrier">
        <option value="10">10</option>
        <option value="100">100</option>
        <option value="1000">1000</option>
        <option value="10000">10000</option>
    </select>
    <br>
    <br>
    Veuillez choisir le type de série :
    <select name="typeSerie">
        <option value="1">Série déjà triée</option>
        <option value="2">Série triée en sens inverse</option>
        <option value="3">Série en total random</option>
        <option value="4">Série quasiment-triée</option>
        <option value="5">Série avec beaucoup de doublons et très peu de termes uniques</option>
    </select>
    <br>
    <br>
    <div>
        Faire la moyenne sur <input id="multi_compute" type="number" name="multi_compute" value="1"> itération(s)
    </div>
    <br>
    <input type="submit" value="Valider">
</form>
</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>