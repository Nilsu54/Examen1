<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <lin

</head>

<body>

    <!-- Navbar -->

    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-warning ">
            <div class="container-fluid">
                <a class="text-dark navbar-brand" href="index.php">I <i class="bi bi-heart-fill text-danger"></i> Profes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="index.php">
                                <i class="bi bi-house-door"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class=" nav-link text-dark" href="/index.php?r=formsongs">
                                <i class="bi bi-plus-circle"></i> Add Songs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="/index.php?r=songs">
                                <i class="bi bi-music-note-list"></i> Credits
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <p></p>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/datatables.js"></script>
    <script src="/js/main.js"></script>


    <!-- Tabla de canciones -->
    <div class="  text-dark container">

        <div class="bg-warning text-dark">
            <h2 class="font-weight-bold text-dark">WEBAMP</h2>
        </div>

        <table class="table table-striped table-hover">
            <thead class=" table-warning">
                <tr>
                    <th class="bi-file-earmark-music" scope="col">Canço actual</th>
                    <th class="bi-clock" scope="col">Duracio</th>
                    <th class="bi-option" scope="col">opcions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php if ($song): ?>
                        <td class="m-4"><i class="bi bi-music-note-beamed"></i> <?= $song['song_name'] ?></td>
                        <td><i class="bi bi-person-circle"> <?= $song['artist'] ?></i></td>
                        <td class="align-middle">
                            <div class="d-flex align-items-center justify-content-start gap-2 p-2 w-100">
                                <!-- Contenedor del reproductor de audio -->
                                <div class="audio-player bg-white rounded-3 shadow-sm p-2 flex-grow-1">
                                    <audio id="myAudio" controls class="w-100 d-none">
                                        <source src="<?= htmlspecialchars($song['song_path']) ?>" type="audio/mpeg">
                                        Tu navegador no soporta el elemento de audio.
                                    </audio>
                                    <button href="index.php" class="btn btn-warning btn-sm random-btn">
                                        <a class="nav-link active text-dark" aria-current="page" href="index.php">
                                            <i class="bi-arrow-counterclockwise"></i> Aleatorio
                                        </a>
                                    </button>

                                </div>
                            </div>
                        </td>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <tbody>
            <tr>
                <td colspan="4">No hi ha canço </td>
            </tr>
        </tbody>
    <?php endif; ?>

    <table class="table table-striped table-hover">
        <thead class=" table-warning">
            <tr>
                <th class="bi-file-earmark-music" scope="col">Canço anterior</th>
                <th class="bi-clock" scope="col">Duracio</th>
                <th class="bi-option" scope="col">opcions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($songss): ?>
                <tr>

                    <td class="m-4"><i class="bi bi-music-note-beamed"></i> <?= $songss['song_name'] ?></td>
                    <td><i class="bi bi-person-circle"> <?= $songss['artist'] ?> </i></td>
                    <td class="align-middle">
                        <div class="d-flex align-items-center justify-content-start gap-2 p-2 w-100">
                            <!-- Contenedor del reproductor de audio -->
                            <div class="audio-player bg-white rounded-3 shadow-sm p-2 flex-grow-1">
                                <audio id="myAudio" controls class="w-100 d-none">
                                    <source src="<?= htmlspecialchars($songss['song_path']) ?>" type="audio/mpeg">
                                    Tu navegador no soporta el elemento de audio.
                                </audio>
                                <button href="index.php" class="btn btn-warning btn-sm random-btn">
                                        <a class="nav-link active text-dark" aria-current="page" href="index.php">
                                            <i class="bi-arrow-counterclockwise"></i> Aleatorio
                                        </a>
                                    </button>
                            </div>
                        </div>
                    </td>
                </tr>
        </tbody>
    </table>
<?php else: ?>
    <tbody>
        <tr>
            <td colspan="4">No hay canciones disponibles</td>
        </tr>
    </tbody>
<?php endif; ?>
<div class="table-responsive mt-4 rounded">
    <table class="table table-striped">
        <thead class="table-warning">
            <tr>
                <th scope="col"><i class="bi bi-music-note"></i> Nombre</th>
                <th scope="col"><i class="bi bi-person"></i> Artista</th>
                <th scope="col"><i class="bi bi-clock"></i> Duración</th>
                <th scope="col"><i class="bi bi-controller"></i> Controles</th>
                <th scope="col"><i class="bi bi-sliders"></i> Config</th>
            </tr>
        </thead>
        <?php if (!empty($songs)): ?>
            <?php foreach ($songs as $song): ?>
                <!-- id_song | song_name | artist | duration | song_path -->
                <tbody>
                    <tr data-song-id="<?= $song['id_song'] ?>">
                        <td class="m-4"><i class="bi bi-music-note-beamed"></i> <?= $song['song_name'] ?></td>
                        <td><i class="bi bi-person-circle"> <?= $song['artist'] ?></i></td>
                        <td id="durationBtn"><i class="bi bi-clock"></i></td>
                        <td class="align-middle">
                            <div class="d-flex align-items-center justify-content-start gap-2 p-2 w-100">
                                <!-- Contenedor del reproductor de audio -->
                                <div class="audio-player bg-white rounded-3 shadow-sm p-2 flex-grow-1">
                                    <audio id="myAudio" controls class="w-100 d-none">
                                        <source src="<?= htmlspecialchars($song['song_path']) ?>" type="audio/mpeg">
                                        Tu navegador no soporta el elemento de audio.
                                    </audio>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Controles de canción">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editSongModal-<?= $song['id_song'] ?>">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                                <button class="btn btn-danger m-1">
                                    <a class="text-reset" style="text-decoration: none;" href="index.php?r=deletesong&id=<?= $song['id_song'] ?>">Eliminar</a>
                                </button>
                            </div>
                        </td>
                    </tr>
</div>
</tbody>

<!-- Modal de edición -->
<div class="modal fade" id="editSongModal-<?= $song['id_song'] ?>" tabindex="-1" aria-labelledby="editSongModalLabel-<?= $song['id_song'] ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSongModalLabel-<?= $song['id_song'] ?>">Editar Canción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para editar la canción -->
                <form action="index.php?r=updatesong" id="editSongForm" method="post" enctype="multipart/form-data">
                    <input type="text" hidden name="song_id" value="<?= $song['id_song'] ?>">
                    <div class="form-floating mb-3">
                        <input type="text" name="song_name" value="<?= $song['song_name'] ?>" class="form-control" id="song_name" placeholder="505">
                        <label for="song_name">Nombre de la canción</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="artist" value="<?= $song['artist'] ?>" class="form-control" id="artist" placeholder="Artic Monkeys">
                        <label for="artist">Artista</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="song" accept="audio/*" class="form-control" id="song">
                        <label for="song">Seleccionar una nueva canción</label>
                        <?php if (!empty($song['song_path'])): ?>
                            <small class="form-text text-muted">
                                Canción actual:
                                <a href="<?= $song['song_path'] ?>" target="_blank"><?= basename($song['song_path']) ?></a>
                            </small>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
<?php else: ?>
    <tbody>
        <tr>
            <td colspan="4">No hay canciones disponibles</td>
        </tr>
    </tbody>
<?php endif; ?>
</table>
    </div>
    </div>

    <!-- Archivos necesarios para Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>