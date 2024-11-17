<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Añadir Canciones</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">I<i class="bi bi-heart-fill text-danger"></i>PROFES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" 
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/index.php?r=formsongs">Add Songs</a>
                        </li>
                          <!--  <li class="nav-item">
              <a class="nav-link" href="/index.php?r=songs">Songs</a>
            </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Formulario para añadir canciones -->
    <div class="container-fluid px-4 py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h2 class="text-center mb-4">
                    <i class="bi bi-music-note-beamed"></i> Añadir Nueva Canción
                </h2>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="/index.php?r=addsong" method="post" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" name="song_name" class="form-control" id="song_name" 
                                    placeholder="505" required>
                                <label for="song_name">
                                    <i class="bi bi-music-note"></i> Nombre de la canción
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="artist" class="form-control" id="artist" 
                                    placeholder="Arctic Monkeys" required>
                                <label for="artist">
                                    <i class="bi bi-person"></i> Artista
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="song" class="form-label">
                                    <i class="bi bi-file-music"></i> Seleccionar archivo de audio
                                </label>
                                <input type="file" name="song" accept="audio/*" class="form-control" 
                                    id="song" required>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-plus-circle"></i> Añadir Canción
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/datatables.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>