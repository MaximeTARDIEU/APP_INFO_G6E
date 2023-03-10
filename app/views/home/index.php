<!DOCTYPE html>

<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$public_root = "/";

$image_folder = $public_root . "images/" ?>
<?php $css = $public_root . "css/" ?>
<?php $js = $public_root . "js/";
$root = "/";
?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-wdith, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $css ?>home.css">


    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>Accueil - AirQ</title>
    <script src="<?= $js ?>ajax_form.js"></script>
    <link rel="stylesheet" href="<?= $js ?>app_v2.js">

</head>

<body>
    <?php // include("header.php") 
    ?>

    <div class="bodyparagraph">

        <div class="slider">
            <img src="<?= $image_folder ?>carrousel3.jpg" alt="img1" class="img_slider active">
            <img src="<?= $image_folder ?>carrousel6.jpg" alt="img5" class="img_slider">
            <img src="<?= $image_folder ?>carrousel5.jpg" alt="img5" class="img_slider">
            <img src="<?= $image_folder ?>carrousel8.jpg" alt="img6" class="img_slider">
            <img src="<?= $image_folder ?>carrousel2.jpg" alt="img2" class="img_slider">
            <img src="<?= $image_folder ?>carrousel4.jpg" alt="img4" class="img_slider">
            <img src="<?= $image_folder ?>carrousel10.jpg" alt="img5" class="img_slider">

            <div class="suivant"><i class="fa-solid fa-circle-chevron-right"></i>
            </div>
            <div class="precedent"><i class="fa-solid fa-circle-chevron-left"></i>
            </div>
        </div>


        <script src="<?= $js ?>app_v2.js" defer></script>



        <div id="container">
            <div class="gauche">
                <h1 class="reveal-1">Le m??tro parisien transporte 1,5 milliard d???utilisateurs par an</h1>
                <p class="reveal-2">L???air du m??tro, plus pollu?? que l???on pense ! Une ??tude alerte sur la pr??sence de particules fines en quantit?? importante dans le m??tro. L???association Respire, ?? l???origine de cette ??tude, a relev?? des concentrations importantes, soit des taux 7,5 fois plus ??lev??s que ceux recommand??s par l???OMS. Au vu du temps pass?? chaque jour dans le m??tro, cela est inqui??tant pour les usagers. Pour rappel, la pollution de l???air serait la cause de 98 000 d??c??s pr??matur??s chaque ann??e en France.</p>
                <p class="reveal-3">Les syst??mes de freinage du m??tro sont ?? l???origine de cette pollution. En effet, ?? l???approche des stations, les plaquettes de freins et les roues ??mettent de nombreuses particules (PM10) dans l???atmosph??re.</p>
            </div>
            <div class="droite">
                <img src="<?= $image_folder ?>metrobonde.jpg" alt="Metro Bonde">
            </div>



        </div>



        <div id="blocimage">
            <div class="left">
                <h1 class="reveal-1">Notre mission :</h1>
                <p class="reveal-2">Notre mission est de contribuer ?? am??liorer le bien-??tre des utilisateurs du m??tro parisien en proposant des solutions concr??tes et innovantes pour rendre le voyage plus confortable et agr??able.</p>
                <img src="<?= $image_folder ?>zen.jpeg" alt="Image de bien-??tre">
            </div>
            <div class="right">
                <h1 class="reveal-1">Notre solution :</h1>
                <img src="<?= $image_folder ?>captair.png">
                <p class=" reveal-2">Le bracelet Captair, qui est ??quip?? de plusieurs capteurs permettant de mesurer la qualit?? de l'environnement autour de l'utilisateur.
                    Le bracelet est con??u pour ??tre port?? par les utilisateurs du m??tro et peut d??tecter diff??rents param??tres tels que l'affluence, la qualit?? de l'air et le bruit. En utilisant ces donn??es,
                    le bracelet Captair peut aider les utilisateurs ?? prendre des d??cisions inform??es sur leur voyage et ?? signaler tout probl??me de qualit??. En fournissant ces informations en temps r??el,
                    nous esp??rons contribuer ?? am??liorer la qualit?? de vie des utilisateurs du m??tro et ?? renforcer la r??putation de la ville de Paris en tant que destination touristique attractive.</p>
                <img src="<?= $image_folder ?>bracelet.png" alt="Image de bracelet">
            </div>
        </div>


        <div class="curve1">
            <img><svg id="visual" viewBox="0 0 1900 120" width="1900" height="120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                <rect x="0" y="0" width="1900" height="140" fill="#00c4b3"></rect>
                <path d="M0 62L52.8 67.7C105.7 73.3 211.3 84.7 316.8 80.2C422.3 75.7 527.7 55.3 633.2 56C738.7 56.7 844.3 78.3 950 84.2C1055.7 90 1161.3 80 1266.8 77C1372.3 74 1477.7 78 1583.2 67.2C1688.7 56.3 1794.3 30.7 1847.2 17.8L1900 5L1900 121L1847.2 121C1794.3 121 1688.7 121 1583.2 121C1477.7 121 1372.3 121 1266.8 121C1161.3 121 1055.7 121 950 121C844.3 121 738.7 121 633.2 121C527.7 121 422.3 121 316.8 121C211.3 121 105.7 121 52.8 121L0 121Z" fill="white" stroke-linecap="round" stroke-linejoin="miter"></path>
            </svg></img>
        </div>

        <div class="forme">
            <div class="capteurs reveal-1">
                <strong>Les diff??rents capteurs :</strong>
                <h5>(Placer le curseur sur les images pour decouvrir les capteurs)</h5>
            </div>
            <main>

                <div class="box reveal-2">
                    <div class="imgBx">
                        <img src="<?= $image_folder ?>img1.jpg">
                    </div>

                    <div class="content">
                        <h2>
                            Capteur pollution<br><span>Capteurs de CO??? et de microparticules embarqu??s sur le bracelet,
                                pour ??valuer la qualit?? de l???air environnant</span>
                        </h2>
                    </div>
                </div>
                <div class="box reveal-2">
                    <div class="imgBx">
                        <img src="<?= $image_folder ?>img2.jpg">
                    </div>

                    <div class="content">
                        <h2>
                            Capteur cardiaque<br><span> Capteur cardiaque embarqu??, pour ??valuer le rythme
                                cardiaque et ??tablir des tendances de stress au quotidien</span>
                        </h2>
                    </div>
                </div>
                <div class="box reveal-2">
                    <div class="imgBx">
                        <img src="<?= $image_folder ?>img3.jpg">
                    </div>

                    <div class="content">
                        <h2>
                            Capteur sonore<br><span>Micro de haute pr??cision embarqu?? pour mesurer le niveau sonore et
                                ??valuer le
                                remplissage</span>
                        </h2>
                    </div>
                </div>

            </main>
        </div>
        <div class="fondblanc">
            <br>
            <div class="newsletter">
                <h2 class="reveal-1">Inscrivez-vous ?? notre newsletter</h2>
                <p class="reveal-2">Si vous souhaitez b??n??ficier d??s ?? pr??sent des avanc??es technologiques de nos capteurs, vous pouvez vous inscrire ?? notre newsletter pour ??tre inform?? de la date de sortie.</p>
                <form class="reveal-3" class="form" action="<?= $root ?>/home/addnewsletter/" method="POST" id="newsletter">
                    <input type="email" name="email" id="email" class="form_field" placeholder="Adresse email" required>
                    <input type="submit" value="S'inscrire" class="newsbtn">
                </form>

            </div>
        </div>


        <?php //include("footer.php") 
        ?>
    </div>
</body>