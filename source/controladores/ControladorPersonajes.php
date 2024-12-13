<?php

    namespace Examen\controladores;




    use Examen\modelos\ModeloPersonajes;
    use Examen\modelos\Personaje;
    use Examen\vistas\VistaPersonajes;

    class ControladorPersonajes{
        public static function mostrarPersonajes(){
            VistaPersonajes::render();
        }

        public static function insertar($nombre, $especie, $origen, $imagen){
            $personaje = new Personaje(0, $nombre, $especie, $origen, $imagen);
            ModeloPersonajes::insertar($personaje);
            header("Location: index.php?accion=verMisPersonajes");
        }

        public static function mostrarMisPersonajes(){
            $personajes = ModeloPersonajes::mostrarMisPersonajes();
            VistaPersonajes::renderPersonajes($personajes);
        }

        public static function eliminar($id){
            ModeloPersonajes::eliminar($id);
            header("Location: index.php?accion=verMisPersonajes");
        }
    }
