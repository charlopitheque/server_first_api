<?php

class VueLogin{
    public function initVueLogin(){
        ?>
        <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="View/CSS/CssLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Portail de connexion</title>
</head>

<body>
    <div class="lg-cat-title">
        <h1>DOMOTIQUE</h1>
    </div>
    <div class="lg-cat-row">
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 1080">
        <defs>
        <style>.cls-1{fill:#fff;}.cls-2{fill:#64c8fa;}</style>
        </defs>
        <title>logo</title>
        <circle class="cls-1" cx="540" cy="540" r="540"/>
        <circle class="cls-2" cx="542.2" cy="539.12" r="517.59"/>
        <polygon class="cls-1" points="161.31 509.3 192.7 544.1 558.48 216.26 896.94 552.52 931.76 517.7 727.71 314.24 727.64 203.1 663.22 203.06 662.94 249.09 560.85 147.33 161.31 509.3"/>
        <polygon class="cls-1" points="538.28 831.58 557.1 831.58 557.1 678.76 565.39 675.05 572.35 668.55 576.88 660.9 578.9 650.51 576.97 641.26 571.89 633.38 564.11 626.38 554.63 622.67 547.99 622.21 540.3 623.26 531 627.11 525.64 631.23 521.25 637.62 518.71 644.28 518.3 651.08 518.85 659.46 523.45 668.87 529.56 673.88 538.28 678.21 538.28 831.58"/>
        <polygon class="cls-1" points="244.09 535.03 242.63 828.85 477.61 831.28 478.77 681.78 434.87 633.66 435.19 585.92 444.19 581.92 452.16 573.26 456 564.4 456.62 557.61 455.8 550.26 452.5 543.11 443.37 534.18 430.38 529.65 419.88 530.06 408.82 534.12 401.81 540.98 397.9 547.85 395.7 556.16 395.84 563.65 399.96 573.95 408.75 582.61 416.03 585.42 416.17 641.19 459.85 689.13 459.85 783.91 289.31 782.26 290.69 556.44 553.12 313.3 798.45 564.47 798.45 784.74 635.19 784.67 635.26 686.38 679.15 637.55 679.08 584.39 688.63 579.1 694.95 572.29 698.52 563.44 698.79 551.49 694.67 542.15 686.98 534.12 676.88 529.17 668.3 528.42 657.17 530.06 649.62 534.32 644.74 539.06 638.9 548.47 637.73 558.57 640.07 569.49 645.01 576.22 651.75 581.58 660.13 585.01 660.13 630.61 616.51 678.76 616.44 831.28 845.5 831.58 845.5 545.65 557.58 250.39 244.09 535.03"/>
        <circle class="cls-2" cx="425.63" cy="558.07" r="20.92"/>
        <circle class="cls-2" cx="548.6" cy="651.17" r="20.92"/>
        <circle class="cls-2" cx="668.9" cy="558.07" r="20.92"/>
        <path class="cls-1" d="M553,326.7l26.37,26.37s-26.55,30.77-53.66-1.28Z"/>
        <path class="cls-1" d="M588.51,362.78l8.43,8.24s-42.31,46.89-89.56-2L516,361S548.59,400.51,588.51,362.78Z"/>
        <path class="cls-1" d="M605.91,380.36l8.79,8.24s-58.79,67.22-126-2.2l8.8-8S547.69,439.49,605.91,380.36Z"/>
        </svg>
        <div class="lg-cat-bar"></div>

        <form class="lg-cat-form" action="index.php?auth=true" method="post">
            <h2>Portail de connexion</h2>
            <input type="email" class="lg-cat-input" placeholder="E-mail" maxlength="255" name="email_login"/>
            <input type="password" class="lg-cat-input" placeholder="Mot de passe" maxlength="50" name="password_login"/>
            <input type="submit" class="lg-cat-button-validate" value="CONNEXION" />
            <a class="lg-cat-button-help" href="VueHomepage.php">Mot de passe oublié ?</a>
        </form>

    </div>

</body>

</html>

<?php
    }
}


?>