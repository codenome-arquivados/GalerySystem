<html>
    <head>
        <meta charset="UTF-8">
        <title>Galeria de fotos</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
        <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </div>
    <script src="<?php echo BASE_URL; ?>/assets/js/jquery-1.7.1.min.js"></script>
    </body>
</html>
