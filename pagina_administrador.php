<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        label {
            display: block;
            text-align: center;
            margin-bottom: 5px; 
        }
        input {
            display: block;
            margin: 0 auto; 
            text-align: center;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="filtra">
        <h1>Filtrar atendimentos:</h1>
        <form method="POST">
            <label for="De">Data inicial</label>
            <input type="datetime-local" id="de" name="inicial" required>
            <label for="ate">Data final</label>
            <input type="datetime-local" id="ate" name="final" required>
        </form>
    </div>
    <div id="manutencao">
        <h1>Manutenção de agendamentos</h1>
        <form method="POST">
            <label for="data">Data para manutenção</label>
            <input type="datetime-local" id="data" name="data" required>
            <label for="cliente">Nome do cliente</label>
            <input type="username" id="cliente" name="cliente" required>
        </form>
        <button><a href="index.html">Voltar</a></button>
    </div>
</body>
</html>
