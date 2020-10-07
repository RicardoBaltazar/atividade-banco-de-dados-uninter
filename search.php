<?php
require_once('db.php');

$objDb = new db();

$link = $objDb->connect_mysql();
$sql = "SELECT * FROM lista";

$result = mysqli_query($link, $sql);
?>

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
            <form action="search-result.php" method="POST">
                <input type="text" name="search" id="" placeholder="Pesquise por nome">
                <input type="submit" value="Pesquisar">
            </form>
        </section>

        <section class="section-results">

            <?php
            while ($datas = mysqli_fetch_array($result)) {
                $name = $datas['name'];
                $number = $datas['number'];
            ?>

                <p><?php echo $name . ' - ' . $number;} ?></p>

        </section>
    </main>



</body>

</html>