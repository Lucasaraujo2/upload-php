<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <h1>Usuarios</h1>
    <a href="form.php"> Novo Usuario</a>
    <table border="1">

        <tr>
            <th>Nome</th>
            <th>Foto</th>
        </tr>
        <?php
        include "conexao.php";
        $script = "select * from fotos";
        $resultado = $conn->query($script)->fetchAll();
        foreach($resultado as $dados){
            echo "<tr>";
            echo "<td>". $dados['nome'] . "</td>";
            echo"<td><img src ='".$dados['foto']. "' width=100></td>";
            echo"</tr>";
        }
        ?>
        
</body>

</html>