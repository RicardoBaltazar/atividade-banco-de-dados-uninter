<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Phone Book</title>
</head>

<body>

    <header>
        <nav>
            <a href="index.php">Cadastrar Número</a>
            <a href="#">Pesquisar Número</a>
        </nav>
    </header>

    <main>
        <section>
            <form action="#" method="POST">
                <input type="text" name="search" id="" placeholder="Pesquise por nome">
                <input type="submit" value="Pesquisar">
            </form>
        </section>

        <section class="section-results">
            <?php
                require_once('db.php');

                $search = $_POST['search'];
                $objDb = new db();

                $link = $objDb->connect_mysql();
                $sql = "SELECT * FROM lista WHERE name LIKE '%$search%' LIMIT 5";

                $result = mysqli_query($link, $sql);
                
                while ($datas = mysqli_fetch_array($result)) {
                    echo $datas['name'].' - '.$datas['number'].'<br>';
                }
            ?>
        </section>
    </main>



</body>

</html>