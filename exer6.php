<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
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

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            text-align: center;
        }

        input[type="number"] {
            padding: 8px;
            font-size: 1em;
            width: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            padding: 8px 15px;
            font-size: 1em;
            background-color:#545aa1;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        h1 {
            margin-top: 30px;
            font-size: 1.8em;
            color: #222;
        }

        .resultado {
            margin-top: 20px;
            background-color: #c5c5df;
            padding: 15px 20px;
            border-radius: 8px;
            width: fit-content;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.05);
            text-align: left;
        }

        .linha {
            margin: 3px 0;
        }
    </style>
</head>
<body>
    <form method="get">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $num = (int)$_GET['numero'];
        echo "<h1>Tabuada do $num</h1>";
        echo "<div class='resultado'>"; 
      
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class='linha'> $num × $i = " . ($num * $i) . "</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>