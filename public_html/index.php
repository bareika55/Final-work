<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

//if (!App::$session->userLoggedIn()) {
//    header('Location: /login.php');
//}
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
</head>
<body id="home">
<header>
    <?php print $navigation->render(); ?>
</header>

<main>

        <div class="welcome-bgn">

        </div>

        <section class="product-container">
            <div class="product">
                <div class="product-image">
                    <img src="./media/images/bike.jpg"
                         alt="product-logo">
                </div>
                <p>
                   Focus Forester 2019
                </p>
                <p>
                    Dviračio aprašymas
                </p>
                <ul>
                    <li>
                        Rėmo dydis - XL
                    </li>
                    <li>
                        26 bėgiai
                    </li>
                </ul>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="./media/images/bike2.jpg"
                         alt="product-logo">
                </div>
                <p>
                    Giant Roller 2019
                </p>

                <p>
                    Dviračio aprašymas
                </p>
                <ul>
                    <li>
                        Rėmo dydis - L
                    </li>
                    <li>
                        29 bėgiai
                    </li>
                </ul>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="./media/images/bike3.jpg"
                         alt="product-logo">
                </div>
                <p>
                    Specialized Wave 2019
                </p>

                <p>
                    Dviračio aprašymas
                </p>
                    <ul>
                    <li>
                        Rėmo dydis - M
                    </li>
                    <li>
                        29 bėgiai
                    </li>
                </ul>
            </div>
        </section>

        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219426156724!2d25.3356966160162!3d54.72335507837753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1567460490499!5m2!1slt!2slt"
                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>
    <!-- Footer -->
    <footer>
        <?php print $footer->render(); ?>
    </footer>
</main>
</body>
</html>