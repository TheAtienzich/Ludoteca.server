<?php
/**
 * @var Juego[] $juegos
 * @var string[] $errores
 */
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>INDEX</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <table border = 1>
            <thead>
            <tr>
                <th colspan="3">JUEGOS</th>
            </tr>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Año</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($juegos as $juego) : ?>
                <tr>
                    <td><strong><?= $juego->getTitulo()?></strong></td>
                    <td><?= $juego->getCategoria()?></td>
                    <td><?= $juego->getAnio()?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <?php if ($errores !== []): ?>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>
        <form action="" method="POST">
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria"><br>
            <label for="anio">Año:</label>
            <input type="number" id="anio" name="anio"><br>

            <button type="submit">Añadir Juego</button>
        </form>
    </body>
</html>
