<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Prática</title>
</head>
<body>
<h1 style="text-align: center;">Conversor de Moeda! (Baseado na Cotação do dia 19/10/2020)</h1>
    <div class="box">
        <form>
            <span>De..</span>
            <select id="moeda">
                <option value="5.58">Dolár</option>
                <option value="6.57">Euro</option>
            </select>
            <input type="number" id="valorEntrada"/>
            <span>Real</span>
            <div class="result"></div>
        </form>
            <br/>
            <button id="converte">converter</button>
    </div>

     
<script src="personalizado.js"> </script>
</body>
</html>