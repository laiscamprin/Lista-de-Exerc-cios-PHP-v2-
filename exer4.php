<!DOCTYPE html>
<html>
<head>
    <title>Contagem de 1 a 100</title>
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
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #222;
        }

        .number {
            background-color: #d7d7ea;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 4px 0;
            font-size: 1.1em;
            width: 60px;
            text-align: center;
            box-shadow: 1px 1px 4px rgba(0,0,0,0.05);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-height: 80vh;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <h1>Contagem de 1 a 100</h1>

    <div class="container">
    <?php
        for ($n = 1; $n <= 100; $n++) {
            echo "<div class='number'>$n</div>";
        }
    ?>
    </div>
</body>
</html>