<?php
function ctrlAddSong($request,$response,$container){
    $response->setTemplate("songs.php");
    return $response;
}
?>