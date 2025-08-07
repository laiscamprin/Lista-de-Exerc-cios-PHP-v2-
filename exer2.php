<!DOCTYPE html>
<html>
<head>
    <title>Digite números até 0</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 40px;
        }

        h1 {
            color: #444;
            margin-bottom: 20px;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1em;
            color: #555;
        }

        input[type="number"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
            margin-bottom: 15px;
            outline: none;
            transition: 0.2s;
        }

        input[type="number"]:focus {
            border-color: #9ec5fe;
            box-shadow: 0 0 5px rgba(100,149,237,0.3);
        }

        button {
            padding: 10px 20px;
            background-color: #7aaefc;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
        }



        .resultado {
            margin-top: 20px;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <h1>Digite números</h1>

    <form method="get">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <div class="resultado">
    <?php
      
        if (!isset($_SESSION['numeros'])) {
            $_SESSION['numeros'] = [];
        }

        if (isset($_GET['numero'])) {
            $num = (int)$_GET['numero'];
            while ($num != 0) {
                echo $num . "<br>Digite outro número.";
                break;
            }
            if ($num == 0) {
                echo "Fim do programa";
            }
        }
    ?>
    </div>
</body>
</html>
