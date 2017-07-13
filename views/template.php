<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo TITLE_SYSTEM; ?></title>

        <!-- CSS Links -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/bootstrap3/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" />
        <!-- Finish CSS Links -->

        <!-- javascript Links -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/bootstrap3/js/Bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
        <!-- Finish javascript Links -->

    </head>
    <body>
        <div class="faixa-de-topo"></div>
        <div class="container-fluid">
            <header>
            </header>
            <main class="container-fluid">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </main>
            <footer>
                <div class="container">
                    <div class="line-footer">
                        <h6 class="text-center">IC 2017 - Desenvolvido por Thiago Cunha e Felipe Medeiros - Orientação: Irineu lima</h6>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
