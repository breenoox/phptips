<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>
    <link rel="stylesheet" href="<?= "/theme/style.css";?>">
</head>
<body>
    <nav class="main_nav">
        <?php if($v->section("sidebar")):
            echo $v->section("sidebar");
        else: 
            ?>
            <a title="" href="<?= "";?>">Home</a>
            <a title="" href="<?= "contato";?>">Contato</a>
            <a title="" href="<?= "teste";?>">Teste</a>
            <?php
        endif?>
    </nav>

    <main class="main_content">
            <?= $v->section("content"); ?>
    </main>

    <footer class="main_footer">
            <?= SITE; ?> - TODOS OS DIREITOS RESERVADOS
    </footer>
    
</body>
</html>