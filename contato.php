<html lang="pt-br">

<!--head-->
<?php
    include('imports/head.php');
?>

<body class="contatinho">

    <!-- Menu -->
    <?php
      include('imports/menu.php');
    ?>

    <!-- Conteúdo -->
    <main>

    <!-- Mapa -->
    <div class="container">
        <div class="row col-lg-12">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="1024
            " height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Circulo Transparente + Foto -->
    <div class="container text-center" id="fotinha">
        <img class="rounded-circle" src="images/sertanejo/artista-2.jpg">
    </div>

    <!-- Título e Sub -->
    <br>
    <div class="container" id="fotinha2">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Lorem Ipsun.</h2>
                <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
            </div>
        </div>
    </div>

    <!-- Primeira Linha de Quadrados -->
    <br>
    <div class="container" id="fotinha2">
        <div class="row text-center no-gutters">

            <div class="col-6">
                <a href="#"><img class="rounded img-fluid" src="images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                <p> TELEFONE </p>
            </div>

            <div class="col-6">
                <a href="#"><img class="rounded img-fluid" src="images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                <p> TELEFONE </p>
            </div>


        </div>
    </div>

    <!-- Segunda Linha de Quadrados -->
    <br>
    <div class="container" id="fotinha2">
        <div class="row text-center no-gutters">

            <div class="col-6">
                <a href="#"><img class="rounded img-fluid" src="images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                <p> TELEFONE </p>
            </div>

            <div class="col-6">
                <a href="#"><img class="rounded img-fluid" src="images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                <p> TELEFONE </p>
            </div>


        </div>
    </div>

    </main>

    <!-- Footer -->
    <?php
        include('imports/footer.php');
    ?>

</body>

</html>
