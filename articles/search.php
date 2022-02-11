<?php
    include_once('./src/header.inc.php');
?>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
<main>
<div class="form" role="region">
    <fieldset>
        <legend>Rechercher un article</legend>
                <?php
                    //connexion à la bdd
                $bdd = new PDO('mysql:host=localhost;dbname=posts;charset=utf8','root','');
                $_article = $bdd->query('SELECT titre, contenu, date_modification FROM content ORDER BY id DESC LIMIT 1');

                //tester la recherche
            if(isset($_GET['query']) AND !empty($_GET['query'])){
                $query = htmlspecialchars($_GET['query']);
                $_article = $bdd->query('SELECT titre, contenu, date_modification FROM content WHERE titre LIKE "%'.$query.'%" ORDER BY id DESC');
                
            }

                ?>
                
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get"><!-- get -->
                <label for="titre">Faîtes votre recherche</label>
                    <input type="search" name="query" placeholder="Recherche..." autofocus>
                    <input type="submit" value="Envoyer">
            </form>  
                
                
        </fieldset>
        </div>
        <?php if($_article->rowCount() > 0){?>
            <article>
                <?php while($data = $_article->fetch()){?>

                <h2>
                    <?= $data['titre']?>
                </h2>
                <p>
                    <?= $data["contenu"]?><br>
                    <time datetime="<?=$data['date_modification']?>">
                        <strong>
                            Date de modifgication : 
                            <?=$data['date_modification']?>
                        </strong>
                    </time>
                </p>

                    <?php } ?>
                <?php } else {?>
                        <p class="warning"> Aucun réseultat pour <?= $query ?>....</p>
                <?php } ?>
               
                
            </article>
            <nav>
                <a class="button" href="index.php">Revenir aux articles</a>
            </nav>
            
        
        


 
</main>
    
<footer>
        <p>&copy; - MIT - <?= $_date_php ?></p>
</footer>
</html>