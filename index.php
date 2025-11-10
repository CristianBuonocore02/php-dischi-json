<?php
require_once "./function.php";

$dati = leggiDischi();


if ($_POST) {
    $nuovo_disco = [
        "titolo" => $_POST["titolo"],
        "artista" => $_POST["artista"],
        "url_della_cover" => $_POST["url_della_cover"],
        "anno_di_pubblicazione" => $_POST["anno_di_pubblicazione"],
        "genere" => $_POST["genere"]
    ];

    $dati[] = $nuovo_disco;
    scriviDischi("./dati.json", $dati);
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Libreria Dischi</title>
</head>

<body class="bg-light">

    <div class="container py-4">
        <h1 class="mb-4 text-center">Libreria personale Dischi</h1>


        <?php stampaCardDischi($dati); ?>

        <hr class="my-5">

        <h2 class="mb-4">Aggiungi un nuovo disco</h2>

        <form action="" method="POST" class="row g-3">
            <div class="col-md-6">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="titolo" value="Random Access Memories" required>
            </div>

            <div class="col-md-6">
                <label for="artista" class="form-label">Artista</label>
                <input type="text" class="form-control" id="artista" name="artista" value="Daft Punk" required>
            </div>

            <div class="col-md-6">
                <label for="url_della_cover" class="form-label">URL cover</label>
                <input type="text" class="form-control" id="url_della_cover" name="url_della_cover"
                    value="https://upload.wikimedia.org/wikipedia/en/f/fb/FMacRumours.PNG" required>
            </div>

            <div class="col-md-3">
                <label for="anno_di_pubblicazione" class="form-label">Anno</label>
                <input type="number" class="form-control" id="anno_di_pubblicazione" name="anno_di_pubblicazione" value="2013" required>
            </div>

            <div class="col-md-3">
                <label for="genere" class="form-label">Genere</label>
                <input type="text" class="form-control" id="genere" name="genere" value="Electronic" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success">Aggiungi disco</button>
            </div>
        </form>
    </div>
</body>


</html>