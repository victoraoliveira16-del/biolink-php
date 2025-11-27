<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Comigo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2>🪄Envie sua mensagem</h2>

        <?php
        if (isset($_POST['mensagem_usuario'])) {

            $nome = $_POST['nome_usuario'];
            $msg = $_POST['mensagem_usuario'];

            if (empty($msg)) {
                echo "<p class='erro'>Erro: Você não escreveu nada!</p>";
            } else {
                echo "<p class='sucesso'>Recebido! <b>$nome</b> disse: $msg</p>";
            }
        }
        ?>

        <form action="" method="POST">
            <input type="text" name="nome_usuario" placeholder="Seu Nome..." class="campo-texto">
            <input type="text" name="mensagem_usuario" placeholder="Sua Mensagem..." class="campo-texto">
            <button type="submit">Enviar Agora</button>
        </form>

        <br>
        <a href="index.php" class="btn-voltar">⬅ Voltar ao Perfil</a>
    </div>

</body>

</html>