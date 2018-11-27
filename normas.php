<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
  //importando o head da pagina
    include('imports/head.php');
  ?>

<body>
    <!--importandoo menu da pagina -->
    <?php
      include('imports/menu.php');
    ?>
    <!-- conteudo da pagina -->
    <main>
        <div class="container">

            <div class="row mt-3">
                <div class="col">
                    <h1 class="text-center">
                        <?php 
                        if ($ID=='PT'){
                        echo "Normas do Site";
                        }
                        if ($ID=='EN'){
                            echo "Site Rules";
                        }
                        if ($ID=='ES'){
                            echo "Normas Del Sitio";
                        } ?>
                    </h1>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-6">
                    <p>1ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>2ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>3ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>4ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>5ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>6ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>7ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>8ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>9ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                    <p>10ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
                </div>
                <div class="col-6">
                    <h3>Ecletic.Music</h3>
                    <p>Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit, tiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>

        </div>
    </main>



    <!-- importando o footer da pagina -->
    <?php
      include('imports/footer.php');
    ?>
</body>

</html>
