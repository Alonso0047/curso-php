<?php

#Sirve para obligar a php especificar las variables 
declare(strict_types=1);


#En php si utilizas una variale fuera de una funcion despues no puedes usarla en la funcion o dentro de algun elemento tienes que usar el atributo global
 #$title = 'Hola';

function render_template(string $template, array $data=[])
{
    extract($data);
    require "templates/$template.php";
}


function get_data(string $url){
    #global $title;
    #echo $title;
    $result = file_get_contents($url);
    $data=json_decode($result, true);
    return $data;
}

function get_until_message (int $days): string
{
    return match (true) {
        $days===0  => "¡Hoy se estrena!",
        $days===1 => "Mañana es el estreno",
        $days<7 => "Esta semana se estrena",
        $days<30 => "Este mes se estrena",
        default  => "$days dias hasta el calendario",
    };
}