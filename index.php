<?php
    declare(strict_types=1);
    require 'Juego.php';
    $juegos = [
            new Juego('Super Mario Galaxy 2','Plataformas',2010)
    ];
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = trim($_POST['titulo'] ?? '');
        $categoria = trim($_POST['categoria'] ?? '');
        $anio = (int) ($_POST['anio'] ?? 0);

        if($titulo === '' ?? '') {
            $errores[] = 'El titulo es obligatorio';
        }
        if($categoria === '' ?? '') {
            $errores[] = 'No puedes dejar la categoria vacia';
        }
        if($anio < 1950 || $anio > 2026){
            $errores[] = 'Introduce un año de lanzamiento valido';
        }

        if($errores === []){
            $juegos[] = new Juego($titulo, $categoria, $anio);
        }
    }

    require 'index.view.php';