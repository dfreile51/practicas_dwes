<?php

function obtenerTodasNoticias() {
    $todasNoticas = array_merge(obtenerNoticiasPais(), obtenerNoticiasMundo(), obtenerNoticiasLeon());
    return $todasNoticas;
}

function obtenerNoticiasPais()
{
    $noticias = array();
    $file = "https://feeds.elpais.com/mrss-s/pages/ep/site/elpais.com/portada";
    $xml = simplexml_load_file($file);
    if ($xml) {
        $items = $xml->xpath("//item");
        foreach ($items as $item) {
            $noticias[] = array(
                'fuente' => 'El Pais',
                'titulo' => $item->title->__toString(),
                'descripcion' => $item->description->__toString(),
                'enlace' => $item->link->__toString()
            );
        }
    }
    return $noticias;
}

function obtenerNoticiasMundo()
{
    $noticias = array();
    $file = "https://e00-elmundo.uecdn.es/elmundo/rss/portada.xml";
    $xml = simplexml_load_file($file);
    if ($xml) {
        $items = $xml->xpath("//item");
        foreach ($items as $item) {
            $noticias[] = array(
                'fuente' => 'El Mundo',
                'titulo' => $item->title->__toString(),
                'descripcion' => $item->description->__toString(),
                'enlace' => $item->link->__toString()
            );
        }
    }
    return $noticias;
}

function obtenerNoticiasLeon()
{
    $noticias = array();
    $file = "https://www.diariodeleon.es/rss";
    $xml = simplexml_load_file($file);
    if ($xml) {
        $items = $xml->xpath("//item");
        foreach ($items as $item) {
            $noticias[] = array(
                'fuente' => 'El Diario de Leon',
                'titulo' => $item->title->__toString(),
                'descripcion' => $item->description->__toString(),
                'enlace' => $item->link->__toString()
            );
        }
    }
    return $noticias;
}

function mostrarNoticias($noticias)
{
    if (is_array($noticias) && count($noticias) > 0) {
        echo "<table class='table table-dark table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Fuente</th>";
        echo "<th>Titular</th>";
        echo "<th>Descripcion</th>";
        echo "<th>Enlace</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($noticias as $noticia) {
            echo "<tr>";
            echo "<th>{$noticia['fuente']}</th>";
            echo "<th>{$noticia['titulo']}</th>";
            echo "<th>{$noticia['descripcion']}</th>";
            echo "<th><a href='{$noticia['enlace']}'>Leer</a></th>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Error</p>";
    }
}
