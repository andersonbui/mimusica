<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Mimusica';
?>
<head>
    <style>
        /* The Image Box */
        div.img {
            border: 1px solid #ccc;
            background-color: white;
        }

        div.img:hover {
            border: 1px solid #777;
        }

        /* The Image */
        div.img img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        /* Description of Image */
        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        /* Add Responsiveness */
        .responsive {
            padding: 0 6px;
            float: left;
            width: 30%;
            margin: 15px ;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        /* Modal Content (image) */
        .jumbotron {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            opacity: 0.9;
            background: white;
        }
        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0.1)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {

            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* Responsive Columns */
        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 15px ;
            }
            .modal-content {
                width: 100%;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        /* Clear Floats */
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<div class="site-index">


<!--    <img src="https://studiosol-a.akamaihd.net/uploadfile/letras/imagem_destaques/100_es_0d45bdb.jpg" alt=""  width="1110">
    <div style="margin-top: 50px;padding:6px;" class="jumbotron">
        <p>Estas son las canciones mas vistas de la semana.</p>
    </div>
    https://studiosol-a.akamaihd.net/uploadfile/letras/imagem_destaques/100_es_0d45bdb.jpg
    <h2 style="text-align:center" class=""></h2>-->

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/3/c/0/f/3c0f5e7a7bf6c059401d9e3574eb7d3a-tb_200.jpg" alt="Trolltunga Norway" width="300" height="200">
            <div class="desc">Flicidade (Part. Caetano Veloso)</div>
            <div class="desc">Trolltunga Norway</div>
        </div>
    </div>


    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/3/c/6/a/3c6abf246792ea8b7756f10e5a481eda-tb_200.jpg" alt="Forest" width="300" height="200">
            <div class="desc">Bye Mama</div>
            <div class="desc">Forest Bridge</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/9/0/b/4/90b455486a54b3715b03559845f5f4ac-tb_200.jpg" alt="Northern Lights" width="300" height="200">
            <div class="desc">Die Letste Fahrt</div>
            <div class="desc">Northern Lights, Norway</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/3/9/b/f/39bffcccaf3fb934b1166cbb3f15c08a-tb_200.jpg" alt="Mountains" width="300" height="200">
            <div class="desc">Kiss Kiss</div>
            <div class="desc">Beautiful Mountains</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/0/0/4/5/00450e258058939c9f93c8a7fed9b088-tb_200.jpg" alt="Trolltunga Norway" width="300" height="200">
            <div class="desc">Put the blame on mame</div>
            <div class="desc">Trolltunga Norway</div>
        </div>
    </div>
    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/letras/191x107/fotos/8/e/b/5/8eb529490a671048386ab93f0d9ed482-tb_200.jpg" alt="Forest" width="300" height="200">
            <div class="desc">Telegrama</div>
            <div class="desc">Telegrama</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/uploadfile/letras/playlists/c/3/a/e/c3ae1b7903bb36bc22b189a9f12c8dae.jpg" alt="Northern Lights" width="300" height="200">
            <div class="desc">Para quien esta soltero</div>
            <div class="desc">Beyonce</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/uploadfile/letras/playlists/7/c/7/d/7c7d015d06fdf94b07e644309c264f04.jpg" alt="Mountains" width="300" height="200">
            <div class="desc">Beautiful Mountains</div>
            <div class="desc">Beautiful Mountains</div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <img src="https://studiosol-a.akamaihd.net/uploadfile/letras/playlists/2/9/8/b/298b92215e85a1043ebdb86ef81adcff.jpg" alt="Mountains" width="300" height="200">
            <div class="desc">Beautiful Mountains</div>
            <div class="desc">Beautiful Mountains</div>
        </div>
    </div>
<!--    <div class="responsive">
        <div class="img">
            <img src="<?php // echo Yii::getAlias('@web').'/'.app\models\Acorde::findOne('a')->ubicacion; ?>" alt="<?php echo Yii::getAlias('@web').'/'.app\models\Acorde::findOne('a')->ubicacion?>" width="300" height="200">
            <div class="desc">Beautiful Mountains</div>
            <div class="desc">Beautiful Mountains</div>
        </div>
    </div>-->

    <div class="clearfix"></div>

    <!-- The Modal -->
    <div id="myModal" class="modal ">
        <span class="close " style="margin-top: 40px;padding:6px;">Cerrar</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // Get all images and insert the clicked image inside the modal
        // Get the content of the image description and insert it inside the modal image caption
        var images = document.getElementsByTagName('img');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        var i;
        for (i = 0; i < images.length; i++) {
            images[i].onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                captionText.innerHTML = this.nextElementSibling.innerHTML;
            }
        }
    </script>

    <div class="jumbotron" style="margin-top: 50px;padding:6px;">

        <h1>Bienvenido!</h1>
        <!--
                <p class="lead">Ya tienes totalmente creada tu aplicacion web con Yii.</p>
        
                <p class="lead">Este es un crud de usuarios hecho en Yii2 framework.</p>-->

        <p><?= Html::a('Unete', ['usuario/'], ['class' => 'btn btn-lg btn-success']) ?></p>

        <!--<a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a>-->

    </div>

</div>
