<!DOCTYPE html>
<html>
<head>
    <title>Consultorio de Fisioterapia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        ul {
            text-align: center;
            margin-top: 20px;
        }

        ul li {
            display: inline-block;
            margin-right: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al Consultorio de Fisioterapia</h1>

    <h2>Registro de Doctor</h2>
    <form action="registro_doctor.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <input type="submit" value="Registrarse">
    </form>

    <h2>O si ya se encuentra registrado:</h2>
    <ul>
        <li><a href="loging.php">Iniciar Sesión</a></li>
    </ul>
</body>
</html>
