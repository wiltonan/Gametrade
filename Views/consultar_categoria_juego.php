<?php
 require_once('../model/conexion.php');
 require_once('../model/categoria.class.php');

 $cat_juego =Categoria_jue::Consultar_categoria_juego();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tabla_categoria_juego">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="3"><center><h5>Categorias de juegos.</h5></center></th>
            <tr>
              <td>Codigo</td>
              <td>Nombre</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cat_juego as $bn): ?>
              <tr>
                <td><?php echo $bn['cat_cod'];  ?></td>
                <td><?php echo $bn['cat_nom'];  ?></td>
                <td>
                  <a href="modificar_categoria_juego.php?codigo_categoria=<?php echo base64_encode($bn['cat_cod']); ?>">Modificar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
