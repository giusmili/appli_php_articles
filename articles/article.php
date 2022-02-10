<?php
    include_once "./src/header.inc.php";
    include_once "./src/connect_bdd.inc.php"
?>
<main>
    <h2>Post publié</h2>
    <p>
        Mise à jour PHP <?= $_modif_php ?>
    </p>
    <?php
        if(!isset($_GET["id"]) || empty($_GET["id"])){
            //response
            header("Location: article.php");
            exit;
        }
        //get id
        $_id = $_GET["id"];
        $_sql = "SELECT * FROM `content` WHERE `id` = :id";

        //prepare request
        $_request = $_bdd->prepare($_sql);
        $_request->bindValue(":id", $_id, PDO::PARAM_INT);
        $_request->execute();
        $_article =  $_request->fetch();

        //verify article
        if(!$_article){
            http_response_code(404);
            print "Article not found!";
            exit;
        }
    ?>
    <article>
        <h2>
            <?= strip_tags($_article['titre'])?>
            <?php
                print  " article number ".$_article['id'];
            ?>
        </h2>
        <p>
            <?= $_article['contenu']?>
        </p>
        <time datetime="<?= $_article['date_modification']?>">
            <?= $_article['date_modification']?>
        </time>
        
    </article>
    <nav>
        <a class="button" href="index.php">Go home</a><!--
    --><a class="button" href="pub.php">Publier un article</a>
    </nav>

</main>
