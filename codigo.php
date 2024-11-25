<?php

$atributos = array(
    'nome' => $_POST['nome'],
    'forca' => $_POST['forca'],
    'inteligencia' => $_POST['inteligencia'],
    'agilidade' => $_POST['agilidade'],
    'habilidade' => $_POST['habilidade']
);

if (empty($atributos['nome']) || 
empty($atributos['forca']) || 
empty($atributos['inteligencia']) || 
empty($atributos['agilidade']) || 
empty($atributos['habilidade'])) {
    echo "Preencha todos os campos";
} else {
    echo "Nome:" . $atributos['nome'] . 
    "<br> Força:". $atributos['forca'] .  
    "<br> Inteligência: ".$atributos['inteligencia'].
    " <br> Agilidade: ".$atributos['agilidade'].
    " <br> Habilidade: ". $atributos['habilidade'];
}

?>