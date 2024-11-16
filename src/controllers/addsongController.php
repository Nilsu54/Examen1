<?php
function addSongController($request,$response,$container){
   
    $songs = $container->songs();
    $name = $request->get(INPUT_POST, "songname");
    $artist = $request->get(INPUT_POST, "songartist");
    $file = $request->get(INPUT_POST, "songfile");

   
    $songs->addSong($name, $artist, $file);
    return $response->redirect("/");
}
?>