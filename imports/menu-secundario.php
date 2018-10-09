<?php
//PHP para alterar a cor do header de acordo com a pagina
	$URL_ATUAL= "$_SERVER[REQUEST_URI]";
	$pagina = explode("/", $URL_ATUAL);
	//echo "pagina1 ".$pagina[0];
	//echo "pagina2 ".$pagina[1];
	//echo "pagina3 ".$pagina[2];
	if ($pagina[2]=="sertanejo"){
		$navheader = '"header-sert"';
	}elseif ($pagina[2]=="indie"){
		$navheader = '"header-indie"';
	}else{
		$navheader = '"navheader"';
	}

  echo '<nav id='.$navheader .' class="navbar navbar-light">';
?>
  <!-- botão do menu secundario com as paginas -->
  <!-- <a href="#" class="navbar-nav slide-menu-open">Open Menu</a> -->
  <div class="navbar-nav slide-menu-open">
    <a href="#" class="navbar-nav slide-menu-open"> <i class="fas fa-bars"></i></a>
  </div>
  <!-- logo -->
	<a class="navbar-brand" href="../../portal/">
		<img src="../images/home/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
		Ecletic.Music
	</a>
  <!-- Icone de busca -->
  <a href="#"><i class="form-inline fas fa-search"></i></a>
  <!-- menu oculto -->
  <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
  <div class="side-menu-sec">
    <a href="#" class="menu-close">&times;</a>
    <nav>
      <ul>
        <!-- <li><a href="#">Classica</a></li>
        <li><a href="#">Hip-Hop</a></li>
        <li><a href="#">Indie</a></li>
        <li><a href="#">Pop</a></li>
        <li><a href="#">Punk</a></li>
        <li><a href="#">Sertanejo</a></li> -->
        <li>PRINCIPAL</li>
        <li><a  href="#"><i class="fas fa-home"></i> Home</a></li>
        <li><a  href="#"><i class="far fa-newspaper"></i> Noticias</a></li>
        <li><a  href="#"><i class="fas fa-chart-line"></i> Ranking</a></li>
        <li><a  href="#"><i class="fas fa-music"></i> Cifras</a></li>
        <li><a  href="#"><i class="fas fa-headphones"></i> Indicações</a></li>
        <li><a  href="#"><i class="far fa-address-card"></i> Quem Somos</a></li>
        <li><a  href="#"><i class="fas fa-phone"></i> Contato</a></li>
      </ul>
    </nav>
    <div id="redes-sociais">
      <ul>
        <li class="face"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="insta"> <a href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="twit"> <a href="#"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Menu principal -->
<nav id="navprincipal">
  <ul class="nav nav-justified">
		<!-- Icone home de cada pagina secundaria usando o PHP para mudar o titulo -->
	  <li class="nav-item">
		  <a class="nav-link active" href="index.php" title="<?php echo $pagina[2] ?>">
			 	<span class="menu-icon"><i class="fas fa-home "></i></span>
			  <span class="menu-text"> <?php echo ucwords($pagina[2]) ?></span>
		  </a>
	 	</li>

    <li class="nav-item">
      <!-- <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Noticias</a> -->
      <a class="nav-link active" href="artistas.php" title="Artistas">
        <span class="menu-icon"><i class="fas fa-microphone-alt"></i></span>
        <span class="menu-text">Artistas</span>
      </a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Ranking</a> -->
      <a class="nav-link active" href="origem.php" title="Origem">
        <span class="menu-icon"><i class="fas fa-book-open"></i> </span>
        <span class="menu-text">Origem</span>
      </a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="#"><i class="fas fa-music"></i> Cifras</a> -->
      <a class="nav-link active" href="lancamentos.php" title="Lançamentos">
        <span class="menu-icon"><i class="fab fa-itunes-note"></i> </span>
        <span class="menu-text">Lançamentos</span>
      </a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="#"><i class="fas fa-headphones"></i> Indicações</a> -->
      <a class="nav-link active" href="destaques.php" title="Destaques">
        <span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
        <span class="menu-text">Destaques</span>
      </a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="#"><i class="far fa-address-card"></i> Quem Somos</a> -->
      <a class="nav-link active" href="marcos.php" title="Marcos">
        <span class="menu-icon"><i class="fas fa-bookmark"></i></span>
        <span class="menu-text">Marcos</span>
      </a>
    </li>
  </ul>
</nav>
