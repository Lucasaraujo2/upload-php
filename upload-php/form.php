<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <h1>Caastrar Novo Usuario</h1>

    <form name="novo-usuario" method="post" action="salvar.php" enctype="multipart/form-data">
        <label for="nome">Nome</label>
        <input name="nome" id="foto" type="text">
        <br>
        <label for="foto">Foto</label>
        <input name="foto" id="foto" type="file">
        <br>
        <button type="submit">SALVAR</button>
    </form>
    <a href="index.php">voltar</a>
</body>

</html>