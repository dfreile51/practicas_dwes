<?php
require "php/funciones.php";
$terre = obtenerTerremotos();

// $dir ="7,marques+de+montevirgen,leon";
// $url ="https://nominatim.openstreetmap.org/search.php?q={$dir}&format=json&limit=1";
// $opts = array('http'=>array('header'=>array("Referer: $url\r\n")));
// $context = stream_context_create($opts);
// $file = file_get_contents($url, false, $context);

// $dirArray = json_decode($file, true);

// if (count($dirArray)>0) {
//     $lat = $dirArray[0]['lat'];
//     $lon = $dirArray[0]['lon'];
// }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjemMaps</title>
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3">
    <link rel="stylesheet" type="text/css " href="css/estilos.css" />
</head>

<body>
    <header class="container-fluid bg-primary text-white py-2">
        <h1>Ejemplo Maps</h1>
    </header>

    <div id="map" class="container-fluid"></div>

    <footer class="container-fluid bg-primary text-center text-white py-1">
        <p>&copy; Diego Freile García</p>
    </footer>

    <script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p">
    </script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2gD2o3lYyMZAEwk-BL6syBuDMLZLeNkY&callback=initMap">
    </script>
    <script>
        function initMap() {
            let map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 40,
                    lng: -4
                },
                zoom: 6,
                mapTypeId: 'terrain',
            });
            let points = JSON.parse('<?php echo json_encode($terre); ?>');
            for (var i = 0; i < points.length; i++) {
                let nombre = points[i].nombre;
                let latLng = new google.maps.LatLng(points[i].lat, points[i].lng);
                let marker = new google.maps.Marker({
                    position: latLng,
                    title: nombre,
                    map: map,
                });
            }
        }
    </script>
</body>

</html>