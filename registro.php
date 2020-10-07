<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
        }
    </style>
</head>

<body>

    <?php
        require_once('db.php');
        $name = $_POST['name'];
        $number = $_POST['number'];

        $objDb = new db();
        $link = $objDb->connect_mysql();

        $sql = "insert into lista(name, number)values('$name', '$number')";

        if (mysqli_query($link, $sql)) {
            echo 'Cadastro realizado com Sucesso';
            header('refresh:3; index.php');
        } else {
            echo 'erro ao registrar o usuario';
        }
    ?>



</body>

</html>