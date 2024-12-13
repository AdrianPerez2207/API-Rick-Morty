<?php

    namespace Examen\vistas;

    class VistaPersonajes
    {
        public static function render()
        {
            include("cabecera.php");

            echo '<div id="principal"></div>';

            include("pie.php");
            echo "<script src='../script.js'></script>";
        }

        public static function renderPersonajes($personajes)
        {
            include("cabecera.php");

            echo '
                <div class="container">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    ';
            foreach ($personajes as $personaje) {

                echo "
                    <div class='col'>
                        <div class='card shadow-sm'>
                            <img src='{$personaje->getImagen()}' class='bd-placeholder-img card-img-top' width='100%' height='225'</img>
                            <div class='card-body'>
                                <p class='card-text'>Nombre: {$personaje->getNombre()}</p>
                                <p class='card-text'>Especie: {$personaje->getEspecie()}</p>
                                <p class='card-text'>Origen: {$personaje->getOrigen()}</p>
                                <div class='d-flex justify-content-between align-items-center'>
                                    <div class='btn-group'>
                                        <a href='index.php?accion=eliminar&id={$personaje->getId()}'
                                         type='button' class='btn btn-sm btn-outline-secondary'>Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            }
            echo "
              </div>
            </div>
                    ";
            include("pie.php");
        }
    }
