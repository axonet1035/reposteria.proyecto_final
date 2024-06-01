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

    <div class="container">
        <form action="submit_order.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="producto">Producto:</label>
                <select id="producto" name="producto" required>
                    <option value="pastel">Pastel</option>
                    <option value="cupcake">Cupcake</option>
                    <option value="galleta">Galleta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" min="1" required>
            </div>
            <button type="submit">Enviar Pedido</button>
        </form>
    </div>
</body>
</html>
