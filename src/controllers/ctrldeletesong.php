<?php

function ctrldeletesong($request, $response, $container) {
    $id = $request->get(INPUT_GET, 'id');
    
    if ($id) {
        $songModel = $container->Songs();
        
        $song = $songModel->getSongById($id);
        
        if ($song && $songModel->deleteSong($id)) {
            if (!empty($song['song_path']) && file_exists($song['song_path'])) {
                unlink($song['song_path']);
            }
        }
    }
    
    $response->redirect("Location: index.php");
    
    return $response;
}