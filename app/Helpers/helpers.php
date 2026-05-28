<?php

if (!function_exists('setActivo')) {
    function setActivo($nombreRuta)
    {
        // Devuelve la clase 'active' de Bootstrap si la ruta coincide
        return request()->routeIs($nombreRuta) ? 'active' : '';
    }
}