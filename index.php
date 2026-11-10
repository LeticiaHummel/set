
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>

    <h1>Lista de Usuários</h1>
    <ul>
        <?php

            require_once 'Usuario.php';

            Usuario::setUsuario('Ana');

            $usuarios = Usuario::listarTodos();

            foreach ($usuarios as $usuario) {
                echo "<li>{$usuario->getNome()}</li>";
            }

        ?>
    </ul>
</body>
</html>
