<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>i love profes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/boostrapicons.css">
  <link rel="stylesheet" href="css/styles.css">
 
</head> 

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        I <i class="bi bi-heart-fill" style="color: red;"></i> Profes 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?r=addsong">Añadir Canciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Añadir Nueva Canción <i class="bi bi-music-note-beamed"></i></h1>
    <p>Sube tu canción favorita a la biblioteca.</p>

    <div class="card mt-4 mb-4 shadow-sm">
        <div class="card-body">
            <form action="index.php?r=addsongform" method="POST" enctype="multipart/form-data" id="addSongForm" data-bs-target="#addSongForm">
                <div class="mb-3">
                    <label for="songName" class="form-label">
                        <i class="bi bi-music-note"></i> Nombre de la Canción
                    </label>
                    <input type="text" 
                           class="form-control" 
                           id="songName" 
                           name="songName" 
                           required 
                           placeholder="Ej: Start Me Up">
                </div>

                <div class="mb-3">
                    <label for="artistName" class="form-label">
                        <i class="bi bi-person"></i> Artista
                    </label>
                    <input type="text" 
                           class="form-control" 
                           id="artistName" 
                           name="artistName" 
                           required 
                           placeholder="Ej: The Rolling Stones">
                </div>

                <div class="mb-3">
                    <label for="songFile" class="form-label">
                        <i class="bi bi-file-music"></i> Archivo de Audio
                    </label>
                    <input type="file" 
                           class="form-control" 
                           id="songFile" 
                           name="songFile" 
                           accept="audio/*" 
                           required>
                    <div class="form-text">Formatos aceptados: MP3, WAV, OGG</div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-upload"></i> Subir Canción
                </button>
            </form>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>