<?php

class Songs 
{

    private PDO $sql;

    /**
     *
     * @param PDO $sql Database connection object (PDO)
     */
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    public function addSong($name, $artist, $file)
    {
        $query = "insert into songs (name, artist, file) 
        values ('{$name}', '{$artist}', '{$file}')";

            // Prepare and execute the query.
        $stm = $this->sql->prepare($query);
        $stm->execute();
       
    }

    public function getAllSongs($song_id)
    {
        $query = "SELECT song_id, song_name, artist, song_path, duration FROM songs where song_id = :song_id;";
        $stm = $this->sql->prepare($query);
        $stm->execute([":song_id" => $song_id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}