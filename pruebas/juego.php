<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <title>TicTacToe</title>
</head>

<body>
    <h1>TIC-TAC-TOE</h1>

    <div id="Tablero">
        <table>
            <tr>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
            </tr>
            <tr>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
            </tr>
            <tr>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
                <td class="cuadro"></td>
            </tr>
        </table>
    </div>

    <canvas id="Canvas"></canvas>

    <p id="Turno">Turno de Jugador 1</p>

    <button id="Reset" onclick="reset()">Reintentar</button>
    <div id="CambioVersion" onclick="cambiarVersion()">Cambia diseño</div>
	<br/><br/>
	<a href="index.php"><input type="button" value="Regresar al Menu Principal"></a>

    <script src="scripts/app.js"></script>
    <script src="scripts/canvas.js"></script>
    <script src="scripts/controller.js"></script>
</body>

</html>