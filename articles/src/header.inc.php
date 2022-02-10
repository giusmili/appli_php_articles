<?php
 
    const title = "PHP - articles and post";
    $_modif_php = phpversion();
    $_date_php = date("d/m/Y - h:i");
    class Page{
        public $_css = "./css/style.css";
        static $_lang = ["fr","en","it"];
       

    }
    $_new_css = new Page;
    
?>
<!DOCTYPE html>
<html lang="<?= Page::$_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?></title> 
    <!-- <script src="./js/app.js"></script> -->
    <link rel="stylesheet" href="<?= $_new_css->_css ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>