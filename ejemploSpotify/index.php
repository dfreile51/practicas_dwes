<?php
    require_once 'vendor/autoload.php';
    require_once 'auth/sesion.php';
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    if (isset($_GET['code'])) {
        $session->requestAccessToken($_GET['code']);
        $api->setAccessToken($session->getAccessToken());

        // Buscar informacion por artista
        $options = array('limit'=>1);
        $artista = "avicii";
        $results = $api->search($artista, 'artist', $options);
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
                echo "<img src='{$artista['image']}'>";
                echo "<h2>ID: {$artista['id']}</h2>";
                echo "<h2>Nombre: {$artista['name']}</h2>";
                echo "<h2>url: {$artista['spotify']}</h2>";
                echo "<h2>seguidores: {$artista['followers']}</h2>";
                echo "<h2>popularidad: {$artista['popularity']}</h2>";
            } else {
                echo "<h2>Artista no encontrado</h2>";
            }
        } catch(Exception $e) {
            echo "<h2>Consulta no realizada</h2>";
        }
    } else {
        header('Location: auth/auth.php' );
        die();
    }
?>