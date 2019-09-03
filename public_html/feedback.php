<?php

require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportuok</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body id="feedback">

<header>
    <?php print $navigation->render(); ?>
</header>

<main>
    <div class="wrapper">
        <div class="block">
            <h1>Palikite komentarą:</h1>
            <?php print $createForm->render(); ?>
        </div>
        <div class="block">
            <div id="person-table">
                <table>
                    <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Vardas</th>
                        <th>Komentaras</th>
                        <th>Data</th>
                        <th>Trinti komentarą</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Rows Are Dynamically Populated -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Update Modal -->
        <div id="update-modal" class="modal">
            <div class="wrapper">
                <span class="close">&times;</span>
                <?php print $updateForm->render(); ?>
            </div>
        </div>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>
<!--JavaScript App.Js file-->
<script defer src="media/js/app.js"></script>
</body>
</html>