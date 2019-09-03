<?php

use \App\App;

require '../bootloader.php';

$form = new \App\Users\Views\LoginForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

function form_success($filtered_input, &$form) {
    App::$session->login(
            $filtered_input['email'],
            $filtered_input['password']
    );
    header('Location: ' . '/');
}

switch (get_form_action()) {
    case 'submit':
        $filtered_input = get_form_input($form->getData());
        validate_form($filtered_input, $form->getData());
        break;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sportuok</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--    <script defer src="media/js/app.js"></script>-->
    </head>
    <body id="login">
        <!-- Header -->        
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <!-- Main Content -->        
        <main>
            <section class="wrapper">
                <div class="block">
                    <h1>Prisijungti:</h1>

                    <!-- Login Form -->
                    <?php print $form->render(); ?>
                </div>
            </section>
        </main>

        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>
    </body>
</html>
