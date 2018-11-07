<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang?>">
  <?php
    include('imports/head.php');
  ?>
  <body>
    <!-- Importanto menu da página -->
    <?php
      include('imports/menu.php');
      ?>
    <!-- Conteúdo do página -->
    <main>
        <div class="container mt-2 mb-3">
            <div class="row">
                <div class=" mt-1 col-md-6">
                    <h1>Nossas Indicações</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Tincidunt tortor aliquam nulla facilisi cras. Elit ullamcorper dignissim cras tincidunt lobortis. Eu non diam phasellus vestibulum lorem sed risus ultricies tristique. Suspendisse faucibus interdum posuere lorem ipsum. Tempus imperdiet nulla malesuada pellentesque elit eget gravida. Placerat duis ultricies lacus sed. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Dui sapien eget mi proin. Mauris in aliquam sem fringilla. Vestibulum sed arcu non odio. Sit amet nisl suscipit adipiscing bibendum est. Gravida arcu ac tortor dignissim convallis. Malesuada pellentesque elit eget gravida. Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Aliquam malesuada bibendum arcu vitae. Facilisis magna etiam tempor orci eu lobortis. Lectus quam id leo in vitae turpis massa sed elementum. Volutpat blandit aliquam etiam erat velit. Porttitor lacus luctus accumsan tortor posuere. Eget velit aliquet sagittis id. Eget aliquet nibh praesent tristique. In est ante in nibh mauris cursus mattis molestie. In iaculis nunc sed augue lacus viverra vitae. Massa ultricies mi quis hendrerit. Diam vel quam elementum pulvinar. Sagittis orci a scelerisque purus. Adipiscing tristique risus nec feugiat in fermentum. Orci dapibus ultrices in iaculis nunc.</p>
                </div>
                <div class="col-md-6 mt-1">
                    <div class="container-fluid">
                        <img class="img-fluid" src="images/principal/indicacao1.jpg" title="Coca-Cola">
                        <img class="img-fluid" src="images/principal/indicacao2.jpg" title="Kiss-FM">
                        <img class="img-fluid" src="images/principal/indicacao1.jpg" title="Coca-Cola">
                        <img class="img-fluid" src="images/principal/indicacao2.jpg" title="Kiss-FM">
                        <img class="img-fluid" src="images/principal/indicacao1.jpg" title="Coca-Cola">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Importando footer da página -->
    <?php
            include('imports/footer.php');
        ?>

</body>

</html>
