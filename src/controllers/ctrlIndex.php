<?php

function ctrlIndex($request, $response, $container){
    // Obtener el modelo de canciones   
    $songModel = $container->Songs();
    
    // Obtener todas las canciones
    $songs = $songModel->getAllSongs();
    
    // Generar número aleatorio del 1 al 10
    $canco = rand(0, count($songs) - 1);

    // Obtener canción para mostrar como actual
    $song = !empty($songs) ? $songs[$canco] : null;
    $songss = !empty($songs) ? $songs[($canco)-1] : null;
    
    // Pasar las variables a la vista
    $response->set('songs', $songs);
    $response->set('song', $song);
    $response->set('songss', $songss);
    
    // Establecer la plantilla
    $response->setTemplate("index.php");
    
    return $response;
}

