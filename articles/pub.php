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
        <legend>Poster vos publications</legend>
                <?php
                    //print $_SERVER['PHP_SELF'];
                ?>
                
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post"><!-- get -->
                <label for="titre">Ajoutez un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus="true">
                    <label for="contenu">Insérer un contenu</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                    <input type="submit" value="Envoyer">
            </form>
                
               
        </fieldset>
        

</div>
    <?php
        include_once "./src/traitement.inc.php";
    ?>  
</main>
    
<footer>
        <p>&copy; - MIT - <?= $_date_php ?></p>
</footer>
</html>