<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>JP Veiculos</h1>
    <?php include('menu.php'); ?>
    <form action="processa_cliente.php" method="POST">
        <h2>Dados do Cliente</h2>
        <label for="nomeCliente">Nome do Cliente:</label>
        <input type="text" id="nomeCliente" name="nomeCliente" required>
        
        <label for="emailCliente">Email:</label>
        <input type="email" id="emailCliente" name="emailCliente" required>
        
        <label for="telefoneCliente">Telefone:</label>
        <input type="text" id="telefoneCliente" name="telefoneCliente" required>

        <button type="submit">Próximo: Cadastro do Veículo</button>
    </form>
</body>
</html>