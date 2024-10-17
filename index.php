<?php

require_once 'app.php';

$movie = new Movie();
$data = $movie->getData();

// echo "<pre>";
// var_dump($data['poster_url']);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Proxima pelicula de Marvel</title>
    <meta name="description" content="Proyecto realizado bajo el uso de la API https://whenisthenextmcufilm.com/api">
    <meta name="author" content="El diseño de la web fue realizado por Diego Salcedo bajo la implementacion de la api">
    <link rel="stylesheet" href="styles.css">
    <style>
    </style>
</head>
<body>
    <div class="container">
            <h1>
                <?= htmlspecialchars(str_replace(':', '', $data['title'])); ?>
            </h1>
            <img src="<?=$data['poster_url']?>" alt="Imagen ultima pelicula de marvel">
            <div>
                <p>
                    <?= htmlspecialchars($data['overview']);?>
                </p>
            </div>
            <div>
                <p class="data-until">
                    Faltan <?= htmlspecialchars($data['days_until']);?> días | <?= $data['release_date']?>
                </p>
            </div>
    </div>
</body>
</html>