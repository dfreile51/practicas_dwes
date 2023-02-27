<?php
    require_once "auth/sesion.php";
    require_once "auth/auth.php";
    $api = new SpotifyWebAPI\SpotifyWebAPI();

    function obtenerInformacion($artista = "") {
        if(isset($_GET['code'])) {
            $session->requestAccessToken($_GET['code']);
            $api->setAccessToken($session->getAccessToken());

            $options = array('limit' => 1);
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
            header('Location: ../auth/auth.php' );
            die();
        }
    }


?>