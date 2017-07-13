<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo TITLE_SYSTEM; ?></title>

        <!-- CSS Links -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
        <!-- Finish CSS Links -->

        <!-- javascript Links -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
        <!-- Finish javascript Links -->

    </head>
    <body>
    	<header>
    	</header>
        <main class="container-fluid">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </main>
        <footer>
        </footer>
    </body>
</html>
