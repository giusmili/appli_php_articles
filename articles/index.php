<?php
    include_once('./src/header.inc.php');
?>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?= $_date_php ?></h2>
            <p>
           

                Mise à jour PHP <?= $_modif_php ?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        <?php
            include_once "./src/connect.inc.php";
        ?>
    <!--end -->
    </main>
    <footer>
        <p>&copy; - MIT - <?= $_date_php ?></p>
    </footer>
   
</body>
</html>