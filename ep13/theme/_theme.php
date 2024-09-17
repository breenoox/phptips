<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>
    <link rel="stylesheet" href="<?= "/theme/style.css";?>">
</head>
<body>

    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax-load_box_circle"></div>
            <div class="ajax_load_box_title">Aguarde, carregando!</div>
        </div>
    </div>

    <main class="content">
        <?= $this->section("content"); ?>
    </main>

    <script src=" <?= url("/theme/assets/js/jquery.js"); ?>"></script>
    <?= $this->section("js"); ?>
</body>
</html>