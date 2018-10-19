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
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col text-center">
          <h1>Os Fatos que Marcaram a Musica</h1>
          <div class="popup-gallery">
            <a href="../images/sertanejo/lancamento-01.jpg" title="The Cleaner"><img src="../images/sertanejo/lancamento-01.jpg" width="200" height="200"></a>
            <a href="../images/sertanejo/lancamento-02.jpg" title="Winter Dance"><img src="../images/sertanejo/lancamento-02.jpg" width="100" height="200"></a>
            <a href="../images/sertanejo/lancamento-03.jpg" title="The Uninvited Guest"><img src="../images/sertanejo/lancamento-03.jpg" width="100" height="200"></a>
            <a href="../images/sertanejo/lancamento-04.jpg" title="The Cleaner"><img src="../images/sertanejo/lancamento-04.jpg" width="100" height="200"></a>
            <a href="../images/sertanejo/lancamento-05.jpg" title="Winter Dance"><img src="../images/sertanejo/lancamento-05.jpg" width="100" height="200"></a>
          </div>
        </div>
      </div>
    </div>

    <!-- importando o footer da pagina -->
    <?php
      include('../imports/footer-secundario.php');
    ?>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      	$('.popup-gallery').magnificPopup({
      		delegate: 'a',
      		type: 'image',
      		tLoading: 'Loading image #%curr%...',
      		mainClass: 'mfp-img-mobile',
      		gallery: {
      			enabled: true,
      			navigateByImgClick: true,
      			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      		},
      		image: {
      			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      			titleSrc: function(item) {
      				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      			}
      		}
      	});
      });
    </script>
  </body>
</html>
