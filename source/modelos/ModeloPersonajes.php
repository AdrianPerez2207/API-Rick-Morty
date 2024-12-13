<?php

    namespace Examen\modelos;

    use MongoDB\BSON\ObjectId;

    class ModeloPersonajes{

        public static function insertar($personaje){
            $conexion = new ConexionBD();
            $conexion->getConexion()->personajes->insertOne(['nombre' => $personaje->getNombre(),
                'especie' => $personaje->getEspecie(), 'origen' => $personaje->getOrigen(), 'imagen' => $personaje->getImagen()]);
            $conexion->cerrarSesion();
        }

        public static function mostrarMisPersonajes(){
            $conexion = new ConexionBD();
            $personajesJson = $conexion->getConexion()->personajes->find();
            $personajes = array();
            foreach ($personajesJson as $personaje){
                $personajes[] = new Personaje($personaje['_id'], $personaje['nombre'], $personaje['especie'], $personaje['origen'], $personaje['imagen']);
            }
            $conexion->cerrarSesion();
            return $personajes;
        }

        public static function eliminar($id){
            $conexion = new ConexionBD();
            $conexion->getConexion()->personajes->deleteOne(['_id' => new ObjectId($id)]);
            $conexion->cerrarSesion();
        }
    }
