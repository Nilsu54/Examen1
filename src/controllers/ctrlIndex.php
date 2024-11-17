<?php

function ctrlIndex($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $songs = $container->Songs()->getAllSongs();
    $response->set("songs", $songs);

    $response->setTemplate("index.php");

    return $response;
    
}