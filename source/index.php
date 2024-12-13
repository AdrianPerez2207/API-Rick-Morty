<?php

    namespace Examen;

    use Examen\controladores\ControladorPersonajes;

    session_start();
    /**
     * AUTOLOAD
     */
    spl_autoload_register(function ($class) {
        //echo $class."<br>";
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php";
    });

    //Tratamiento de botones, links
    if (isset($_REQUEST["accion"])) {
        if ($_REQUEST["accion"] == "insertar") {
            ControladorPersonajes::insertar($_REQUEST["nombre"], $_REQUEST["especie"], $_REQUEST["origen"], $_REQUEST["imagen"]);
        }
        if ($_REQUEST["accion"] == "verMisPersonajes") {
            ControladorPersonajes::mostrarMisPersonajes();
        }
        if ($_REQUEST["accion"] == "eliminar") {
            ControladorPersonajes::eliminar($_REQUEST["id"]);
        }
        if ($_REQUEST["accion"] == "verPersonajes") {
            ControladorPersonajes::mostrarPersonajes();
        }
    } else if ($_POST != null) {

    } else {
        //Página de inicio
        ControladorPersonajes::mostrarPersonajes();
    }

