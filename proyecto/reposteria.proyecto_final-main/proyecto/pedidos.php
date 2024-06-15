<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <h1>Realizar Pedido</h1>
        
    </header>
    <nav class="containe_img">
        <ul>
            <li><a id="regresar" href="bienvenido.php">regresar</a></li>
        </ul>
    </nav>
    <div class="container">
    <form>
  <label for="id_cliente">Nombre de cliente:</label><br>
  <input type="text" id="id_cliente" name="id_cliente"><br>
  <br>
  <label for="pedido">Pedido:</label><br>
<select id="pedido" name="pedido">
    <option value="primera">......</option>
    <option value="torta_chocolate">Torta de Chocolate</option>
    <option value="torta_vainilla">Torta de Vainilla</option>
    <option value="galletas">Galletas</option>
</select><br>
  <br>
  <label for="precio">Precio del pedido:</label><br>
  <input type="text" id="precio" name="precio"><br>
  <br>
  <label for="direccion">Direccion:</label><br>
  <input type="text" id="direccion" name="direccion"><br>
  <br>
  <label for="fecha">Fecha del pedido:</label><br>
  <input type="date" id="fecha" name="fecha"><br><br>
  
  <input type="submit" value="Enviar">
</form>
    </div>
</body>
</html>
