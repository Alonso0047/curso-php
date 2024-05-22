<?php

#Te trae el archivo entero 
 # require 'functions.php';
#Esta es la mejor forma
require_once 'constantes.php';
require_once 'functions.php';
#Include 'functions.php';

$data = get_data(API_URL);

$until_message = get_until_message($data["days_until"]);



?>

<?php render_template('head', ["title"=>$data["title"]]); ?>
<?php render_template('main', array_merge($data, ["until_message"=>$until_message])); ?>
<?php render_template('styles', $data); ?>




