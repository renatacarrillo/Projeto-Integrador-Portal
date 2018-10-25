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
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-12 text-center">
              <article id="destaque1">
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
              <section id="destaque2" class="text-center">
                <img src="../images/sertanejo/destaques-3.jpg" class="img-fluid" alt="Acompanhe os destaques">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
              </section>
            </div>
            <div class="col-6">
              <section id="destaque3" class="text-center">
                <img src="../images/sertanejo/destaques-4.jpg" class="img-fluid" alt="Acompanhe os destaques">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
              </section>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <article id="destaque4" class="text-center">
                <picture>
                  <source media="(max-width: 549px)" srcset="../images/sertanejo/destaques-2.jpg" class="img-fluid">
                  <source media="(min-width: 550px)" srcset="../images/sertanejo/destaques-2.jpg" class="img-fluid">
                  <img src="../images/sertanejo/destaques-2.jpg" class="img-fluid" alt="Acompanhe os destaques">
                </picture>
                <h1 class="text-center">Lorem Ipsum</h1>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <section id="destaque5" class="text-left">
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
        <!-- aside com as mais lidas  -->
        <div class="col-md-4 mt-4">
          <aside class="sert-dest-aside rounded">
            <h3 class="text-center rounded">Mais Lidas</h3>
            <ol>
              <li class="mb-2">
                <a href="#destaque1" class="text-dark">
                  <span class="h3">Lorem ipsum</span><br>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                </a>
              </li>
              <li class="mb-2">
                <a href="#destaque2" class="text-dark">
                  <span class="h3">Lorem ipsum</span><br>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                </a>
              </li>
              <li class="mb-2">
                <a href="#destaque3" class="text-dark">
                  <span class="h3">Lorem ipsum</span><br>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                </a>
              </li>
              <li class="mb-2">
                <a href="#destaque4" class="text-dark">
                  <span class="h3">Lorem ipsum</span><br>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                </a>
              </li>
              <li class="mb-2">
                <a href="#destaque5" class="text-dark">
                  <span class="h3">Lorem ipsum</span><br>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                </a>
              </li>
            </ol>
          </aside>
          <!-- Section com o link para as outras paginas  -->
          <section class="mt-4 sert-dest-sect">
            <h3 class="text-center rounded">Veja Mais</h3>
            <div class="d-flex align-self-center ">
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center  w-100">
                <a href="artistas.php" class="btn btn-warning btn-lg w-100" title="Artistas">
                  <span class="menu-icon-dest"><i class="fas fa-microphone-alt"></i></span><br>
                  <span class="menu-text-dest">Artistas</span>
                </a>
              </div>
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center  w-100">
                <a href="origem.php" class="btn btn-warning btn-lg w-100" title="Origem">
                  <span class="menu-icon-dest"><i class="fas fa-book-open"></i></span><br>
                  <span class="menu-text-dest">Origem</span>
                </a>
              </div>
            </div>
            <div class="d-flex align-self-center flex-fill">
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center w-100 " >
                <a href="lancamentos.php" class="btn btn-warning btn-lg w-100" title="Lançamentos">
                  <span class="menu-icon-dest"><i class="fab fa-itunes-note"></i></span><br>
                  <span class="menu-text-dest">Lançamentos</span>
                </a>
              </div>
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center w-100">
                <a href="marcos.php" class="btn btn-warning btn-lg w-100" title="Marcos">
                  <span class="menu-icon-dest"><i class="fas fa-bookmark"></i></span><br>
                  <span class="menu-text-dest">Marcos</span>
                </a>
              </div>
            </div>
          </section>
        </div>

      </div>
    </div>

    <!-- importando o footer da pagina -->
    <?php
      include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
