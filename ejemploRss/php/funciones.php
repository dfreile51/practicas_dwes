<?php
function obtenerTerremotosXML()
{
    $terremotos = array();
    $file = "https://www.ign.es/ign/RssTools/sismologia.xml";
    $xml = simplexml_load_file($file);
    if ($xml) {
        $items = $xml->xpath("//item");
        foreach ($items as $item) {
            $terremotos[] = array(
                'nombre' => $item->title->__toString(),
                'lat' => $item->children('geo', TRUE)->lat->__toString(),
                'lng' => $item->children('geo', TRUE)->long->__toString(),
            );
        }
    }
    return $terremotos;
}

function obtenerTerremotosDOM()
{
    $terremotos = array();
    $fichero = new DOMDocument();
    $fichero->load("https://www.ign.es/ign/RssTools/sismologia.xml");
    $items = $fichero->getElementsByTagName("item");
    foreach ($items as $item) {
        $terremotos[] = array(
            'nombre' => $item->getElementsByTagName("title")[0]->textContent,
            'lat' => $item->getElementsByTagName("lat")[0]->textContent,
            'lng' => $item->getElementsByTagName("long")[0]->textContent,
        );
    }
    return $terremotos;
}

function mostrarTerremotos($terremotos)
{
    if (is_array($terremotos) && count($terremotos) > 0) {
        echo "<table class='table table-dark table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Titulo</th>";
        echo "<th>Latitud</th>";
        echo "<th>Longitud</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($terremotos as $terremoto) {
            echo "<tr>";
            echo "<th>{$terremoto['nombre']}</th>";
            echo "<th>{$terremoto['lat']}</th>";
            echo "<th>{$terremoto['lng']}</th>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Error</p>";
    }
}
