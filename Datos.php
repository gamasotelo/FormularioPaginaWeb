<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $codigo = $_POST["codigo"];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $caducidad = $_POST['caducidad'];
    
        echo "Código del producto: " .$codigo;
        echo "<br>Nombre:  " .$producto;
        echo "<br>Precio: " .$precio;
        echo "<br>Unidades:  " .$cantidad ;
        echo "<br>Caducidad: " .$caducidad;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registro_estudiantes";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // Insertar datos
        $sql = "INSERT INTO estudiantes (codigo, producto, precio, cantidad, caducidad)
        VALUES ('$codigo', '$producto', '$precio', '$cantidad', '$caducidad')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>

