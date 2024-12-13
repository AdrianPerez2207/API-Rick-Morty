<?php

    namespace Examen\modelos;

    class Personaje{
        private $id;
        private $nombre;
        private $especie;
        private $origen;
        private $imagen;

        /**
         * @param $id
         * @param $nombre
         * @param $especie
         * @param $origen
         * @param $imagen
         */
        public function __construct($id, $nombre, $especie, $origen, $imagen)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->especie = $especie;
            $this->origen = $origen;
            $this->imagen = $imagen;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getEspecie()
        {
            return $this->especie;
        }

        /**
         * @param mixed $especie
         */
        public function setEspecie($especie)
        {
            $this->especie = $especie;
        }

        /**
         * @return mixed
         */
        public function getOrigen()
        {
            return $this->origen;
        }

        /**
         * @param mixed $origen
         */
        public function setOrigen($origen)
        {
            $this->origen = $origen;
        }

        /**
         * @return mixed
         */
        public function getImagen()
        {
            return $this->imagen;
        }

        /**
         * @param mixed $imagen
         */
        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }






    }