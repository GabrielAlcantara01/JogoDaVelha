<head>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
</head>
    <body>
        <h1>Jogo da velha</h1>
        <div class="jogo">
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
            <div class="casa"></div>
        </div>
        <?php
        session_start();

        function getplayerturn() {
            $players = ['X', 'O'];

            if(!isset($_SESSION['turn'])){
                $_SESSION['turn'] = 0;
            }
            $currentPlayer = $players[$_SESSION['turn'] % 2];

            return $currentPlayer;
        }
        ?>
        
    </body>
</html>
