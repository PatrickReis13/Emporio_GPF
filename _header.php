<?php

$_css = $_js = '';
if (isset($page['css']))
    $_css = '<link rel="stylesheet" href="assets/css/' . $page["css"] . '">' . "\n";

if (isset($page['js']))
    $_js = '<script src="assets/js/' . $page["js"] . '"></script>' . "\n";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <?php
    
    echo $_css;
    ?>
    <?php 
    ?>
    <link rel="shortcut icon" href="logo.png">
    <?php  
    ?>
    <title>Hello Word - <?php echo $page["title"] ?></title>
</head>

<body>

    <div id="wrap">

        <header>

            <div class="header-logo-title">

                <?php 
                ?>
                <a href="index.php" title="Página inicial">
                    <?php 
                    ?>
                    <img src="assets/img/<?php echo $site["logo"] ?>" alt="Logotipo de <?php echo $site["sitename"] ?>">
                </a>

                <?php 
                ?>
                <div class="header-title">
                    <h1><?php echo $site["title"] ?></h1>
                    <small><?php echo $site["slogan"] ?></small>
                </div>

            </div>

            <?php 
            ?>
            <div class="header-search">
                <form action="" method="get">
                    <input type="search" name="q" id="search" placeholder="Procurar...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                </form>
            </div>

        </header>

        <?php 
        ?>
        <nav>

            <a href="index.php" title="Página inicial">
                <i class="fa-solid fa-house fa-fw"></i>
                <span>Início</span>
            </a>

            <a href="contacts.php" title="Faça Contato">
                <i class="fa-solid fa-comment fa-fw"></i>
                <span>Contatos</span>
            </a>

            <a href="about.php" title="Sobre agente">
                <i class="fa-solid fa-circle-info fa-fw"></i>
                <span>Sobre</span>
            </a>

            <a id="userAccess" href="login.php" title="Logue-se">
                <img id="userImg" src="assets/img/logo02.png" alt="Login de usuário" referrerpolicy="no-referrer">
                <i id="userIcon" class="fa-solid fa-right-to-bracket fa-fw"></i>
                <span id="userLabel"></span>
            </a>

        </nav>

        <main>