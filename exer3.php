<!DOCTYPE html>
<html>
<head>
    <title>Frutas</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f1e9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #2a2a2a;
        }

        p {
            background-color: #edad9e;
            padding: 10px 20px;
            border-radius: 10px;
            margin: 6px 0;
            font-size: 1.2em;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.05);
            width: 80%;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Lista de Frutas</h1>

    <?php
    $frutas = ["Melancia", "Jabuticaba", "Pera", "Goiaba", "Melão"];
    foreach ($frutas as $fruta) {
        echo "<p>Esta é a fruta $fruta</p>";
    }
    ?>
</body>
</html>