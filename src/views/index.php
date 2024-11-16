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
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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
    <h1>I <i class="bi bi-heart-fill" style="color: red;"></i> Profes</h1>
    <p>El "Framework" per estudiants de 2n de DAW.</p>
    <?php if (isset($name)) { ?>
      <p class="alert alert-primary">Hola <?php echo $name ?></p>
    <?php } ?>

    <!-- Tabla de canciones -->
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col"><i class="bi bi-hash"></i></th>
                    <th scope="col"><i class="bi bi-music-note"></i> Nombre</th>
                    <th scope="col"><i class="bi bi-person"></i> Artista</th>
                    <th scope="col"><i class="bi bi-clock"></i> Duración</th>
                    <th scope="col"><i class="bi bi-controller"></i> Controles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><i class="bi bi-music-note-beamed"></i>Start Me Up</td>
                    <td><i class="bi bi-person-circle"></i> The Rolling Stones</td>
                    <td><i class="bi bi-clock"></i>3:27 </td>
                    <td>
                    <audio controls>
                        <source src="uploads/songs/The Rolling Stones - Start Me Up - Official Promo.mp3" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>