<!DOCTYPE html>
<html>
<head>
    <title>Múltiplos de 3</title>
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
        }

        p {
            background-color: #a5b3aa;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 5px;
            font-size: 1.2em;
            width: 80px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Múltiplos de 3 (de 3 até 30)</h1>

    <?php
    for ($i = 3; $i <= 30; $i += 3) {
        echo "<p>$i</p>";
    }
    ?>
</body>
</html>