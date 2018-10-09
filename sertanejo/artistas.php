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
    <div class="container">
      <article class="mt-3 mb-3">
        <h1>Os Melhores Artistas Sertanejo</h1>
        <div class="card-deck">
          <div class="card text-white bg-dark mb-3">
            <img class="card-img-top rounded-circle" src="../images/sertanejo/artista-1.jpg" alt="Michel Teló">
            <div class="card-body">
              <h5 class="card-title">Michel Teló</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small>Albuns:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/michel1.jpg" alt="Bem Sertanejo"></li>
                <li> <img class="w-25" src="../images/sertanejo/michel2.jpg" alt="Sunset"></li>
                <li> <img class="w-25" src="../images/sertanejo/michel3.jpg" alt="Na Balada"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white bg-dark mb-3">
            <img class="card-img-top rounded-circle" src="../images/sertanejo/artista-2.jpg" alt="Luan Santana">
            <div class="card-body">
              <h5 class="card-title">Luan Santana</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small>Albuns:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/michel1.jpg" alt="Bem Sertanejo"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white bg-dark mb-3">
            <img class="card-img-top rounded-circle" src="../images/sertanejo/artista-3.jpg" alt="Chitãozinho & Xororó">
            <div class="card-body">
              <h5 class="card-title">Chitãozinho & Xororó</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small>Albuns:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/michel3.jpg" alt="Na Balada"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white bg-dark mb-3">
            <img class="card-img-top rounded-circle" src="../images/sertanejo/artista-4.jpg" alt="Simone & Simaria">
            <div class="card-body">
              <h5 class="card-title">Simone & Simaria</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small>Albuns:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/michel2.jpg" alt="Sunset"></li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <nav aria-label="Navegação das paginas de artistas">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Anterior</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Próximo">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Próximo</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- importando o footer da pagina -->
    <?php
      include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
