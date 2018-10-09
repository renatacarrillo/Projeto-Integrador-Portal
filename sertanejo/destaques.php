<!DOCTYPE html>
<html lang="pt-br">
  <!--importando o head da pagina -->
  <?php
    include('../imports/head.php');
  ?>
  <body>
    <!--importandoo menu da pagina -->
    <?php
      include('../imports/menu-secundario.php');
    ?>
    <!-- conteudo da pagina -->

    <div class="container mb-4">
      <div class="row mt-4">
        <div class="col-12 text-center">
          <article class="">
            <picture>
              <source media="(max-width: 549px)" srcset="../images/sertanejo/destaques-1.jpg" class="img-fluid">
              <source media="(min-width: 550px)" srcset="../images/sertanejo/destaques-1.jpg" class="img-fluid img-destaque">
              <img src="../images/sertanejo/destaques-1.jpg" class="img-fluid" alt="Acompanhe os destaques">
            </picture>
            <h1>Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </article>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-6">
          <section class="text-center">
            <img src="../images/sertanejo/destaques-3.jpg" class="img-fluid" alt="Acompanhe os destaques">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
          </section>
        </div>
        <div class="col-6">
          <section class="text-center">
            <img src="../images/sertanejo/destaques-4.jpg" class="img-fluid" alt="Acompanhe os destaques">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
          </section>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <article class="text-center">
            <picture>
              <source media="(max-width: 549px)" srcset="../images/sertanejo/destaques-2.jpg" class="img-fluid">
              <source media="(min-width: 550px)" srcset="../images/sertanejo/destaques-2.jpg" class="img-fluid">
              <img src="../images/sertanejo/destaques-2.jpg" class="img-fluid" alt="Acompanhe os destaques">
            </picture>
            <h1 class="text-center">Lorem Ipsum</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <section class="text-left">
              <div class="row mt-4">
                <div class="col-6 col-md-4">
                  <img src="../images/sertanejo/lancamentos.jpg" class="text-center img-thumbnail" alt="Acompanhe os destaques">
                </div>
                <div class="col-6 col-md-8 align-middle">
                  <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </section>
          </article>
        </div>
      </div>

    </div>




    <!-- importando o footer da pagina -->
    <?php
      include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
