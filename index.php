<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            // declarando um número aleatório entre 0 e 100
            $number = random_int(0, 100);
            print "<p>O valor gerado foi <strong>$number</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar número</button>
    </main>
</body>
</html>