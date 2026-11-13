<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App Web con Base de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding-top: 50px;
        }
        .mensaje {
            background-color: #ffffff;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="mensaje">
        <h1>Hola Mundo desde PHP y Docker!</h1>
        
        <?php
        // Variables para conectar a la base de datos (deben coincidir con el docker-compose)
        $host = 'db'; 
        $user = 'root';
        $password = 'rootpassword';
        $database = 'mi_base_datos';

        // Hacemos una pequeña pausa para darle tiempo a MySQL de arrancar
        sleep(5);

        // Creamos la conexión
        $conn = new mysqli($host, $user, $password, $database);

        // Revisamos si hubo un error en la conexión
        if ($conn->connect_error) {
            echo "<p style='color: red;'>Error de conexion: " . $conn->connect_error . "</p>";
        } else {
            echo "<p style='color: green;'>Conexion a la base de datos MySQL exitosa!</p>";
        }
        ?>
    </div>
</body>
</html>