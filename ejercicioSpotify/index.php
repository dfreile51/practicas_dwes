<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscaArtista</title>
    <!-- Bootstrap CDN Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Buscar Artista
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <input type="text" name="artista" id="artista" class="form-control">
                </form>
            </div>
        </div>
    </div>

    <?php 
        require 'vendor/autoload.php';
        require 'auth/sesion.php';
        
        $api = new SpotifyWebAPI\SpotifyWebAPI();
        if(isset($_GET['code'])) {
            $session->requestAccessToken($_GET['code']);
            $api->setAccessToken($session->getAccessToken());

            $options = array('limit' => 1);
            $artista = $_REQUEST['artista'];
            $results = $api->search($artista,'artist', $options);
            try {
                if(count($results->artists->items)>0) {
                    $data = $results->artists->items[0];
                    $artista = array(
                        'id' => $data->id,
                        'name' => $data->name,
                        'spotify' => $data->external_urls->spotify,
                        'image' => $data->images[0]->url,
                        'followers' => $data->followers->total,
                        'popularity' => $data->popularity,
                    );
                    echo "<div class='container-fluid'>
                            <div class='card'>
                                <div class='card-header'>Artist</div>
                                <div class='card-body'>
                                    <h2 class='card-title'>{$artista['name']}</h2>
                                </div>
                            </div>
                          </div>";
                } else {
                    echo "<div class='container-fluid'>
                            <h2>Artista no encontrado</h2>
                          </div>";
                }
            } catch(Exception $e) {
                echo "<h2>Consulta no realizada</h2>";
            }
        } else {
            header('Location: auth/auth.php' );
            die();
        }
    ?>
    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>