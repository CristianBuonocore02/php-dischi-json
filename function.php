<?php
function leggiDischi($file = "./dati.json")
{
    $json = file_get_contents($file);
    return json_decode($json, true);
}


function scriviDischi($file, $dati)
{
    file_put_contents($file, json_encode($dati, JSON_PRETTY_PRINT));
}



function stampaCardDischi($dati)
{
    echo '<div class="container"><div class="row">';
    foreach ($dati as $disco) {
        echo '
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="' . $disco['url_della_cover'] . '" class="card-img-top" alt="' . $disco['titolo'] . '">
                <div class="card-body text-center">
                    <h5 class="card-title">' . $disco['titolo'] . '</h5>
                    <p class="card-text text-muted">' . $disco['artista'] . '</p>
                    <p class="card-text"><small>' . $disco['anno_di_pubblicazione'] . ' - ' . $disco['genere'] . '</small></p>
                </div>
            </div>
        </div>
        ';
    }
    echo '</div></div>';
}
