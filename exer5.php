<!DOCTYPE html>
<html>
<head>
    <title>Multiplicação de números pares</title>
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
            color: #2a2a2a;
        }

        .resultado {
            background-color: #fafcd4;
            padding: 15px 25px;
            border-radius: 10px;
            font-size: 1.3em;
            font-weight: bold;
            box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.05);
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Multiplicação de números pares</h1>

    <div class="resultado">
        <?php
            $soma = 0;
            for ($num = 1; $num <= 100; $num++) {
                if ($num % 2 == 0) {
                    $soma += $num;
                }
            }
            echo "Soma dos números pares é: $soma";
        ?>
    </div>
</body>
</html>