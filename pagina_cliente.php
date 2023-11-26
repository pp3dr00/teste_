<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1, h2 {
            text-align: center;
        }

        form {
            font-family: Arial;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Agendamento</h1>
        <form method="post">
            <label for="dataHoraAgendada">Data/Hora do Agendamento:</label>
            <input type="datetime-local" id="dataHoraAgendada" name="dataHoraAgendada" required>
            <br>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>
            <br>
            <button type="submit" name="incluir">Incluir Agendamento</button>
        </form>
        <h2>Alterar Agendamento</h2>
        <form method="post">
            <label for="indice">Selecione o Agendamento:</label>
            <select id="indice" name="indice" required>
            </select>
            <br>
            <label for="dataHoraAgendadaAlterar">Nova Data/Hora do Agendamento:</label>
            <input type="datetime-local" id="dataHoraAgendadaAlterar" name="dataHoraAgendada" required>
            <br>
            <label for="descricaoAlterar">Nova Descrição:</label>
            <input type="text" id="descricaoAlterar" name="descricao" required>
            <br>
            <button type="submit" name="alterar">Alterar Agendamento</button>
        </form>
        <button><a href="index.html">Voltar</a></button>
    </div>
</body>
</html>
