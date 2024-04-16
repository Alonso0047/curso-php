<?php
#Inicializar una nueva sesion de curl
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
#Indicar que queremos recibir el resultado de la peticion y no mostrarla por pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#Ejecutar la peticion y guardamos el resultado
$result = curl_exec($ch);
$data=json_decode($result, true);

curl_close($ch);



?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>

</head>

<main>
    <pre style="font-size: 8px; overflow:scroll; height:250px">
        <?php var_dump($data);?>
    </pre>
    <section>
        <img src="<?=$data["poster_url"];?>" width="200" alt="Poster"
        style="border-radius:16px">
    </section>
    <hgroup>
        <h3><?=$data["title"];?> se estrena en <?=$data["days_until"]; ?></h3>
        <p>Fecha de estreno<?=$data["release_date"];?></p>
        <p>La siguiente es <?=$data["following_production"]["title"]; ?></p>
    </hgroup>
   
</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    img{
        margin: 0 auto;
    }
    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>