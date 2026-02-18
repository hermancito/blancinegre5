<!DOCTYPE html>
<html lang="es">
<head>
    <title>Blanc i negre</title>
    <meta charset="utf-8">

    <?= $this->Html->meta('favicon_bin.ico', '/favicon_bin.ico',['type' => 'icon']); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.0/dist/themes/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('multiple-select.css') ?>
    <?= $this->Html->script('multiple-select.js') ?>
</head>
<body>

<?php
if(isset($current_user)){
    echo $this->element('menu');
}
?>
<div class="row" style="height: 50px;"></div>
<div class="container-fluid">
    <br>
    <div id="msg"></div>
    <div id="msg2"></div>
    <br>
    <div class="col-md-12">
        <?= $this->Flash->render() ?>
    </div>
    <?= $this->fetch('content') ?>


</div>

</body>
</html>
