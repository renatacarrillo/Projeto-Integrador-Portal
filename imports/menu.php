<!-- Menu top das paginas -->

<?php
//PHP para alterar a cor do header de acordo com a pagina
	$URL_ATUAL= "$_SERVER[REQUEST_URI]";
	$pagina = explode("/", $URL_ATUAL);
	//echo "pagina1 ".$pagina[0];
	//echo "pagina2 ".$pagina[1];
	//echo "pagina3 ".$pagina[2];
	// if ($pagina[2]=="sertanejo"){
	// 	$navheader = '"header-sert"';
	// }elseif ($pagina[2]=="indie"){
	// 	$navheader = '"header-indie"';
	// }else{
	// 	$navheader = '"navheader"';
	// }
	$navheader = '"navheader"';

  echo '<nav id='.$navheader .' class="navbar navbar-light">';
?>
    <!-- botão do menu secundario com as paginas -->
    <!-- <a href="#" class="navbar-nav slide-menu-open">Open Menu</a> -->
    <div class="navbar-nav slide-menu-open">
      <a href="#" class="navbar-nav slide-menu-open"> <i class="fas fa-bars"></i></a>
    </div>
    <!-- logo -->
    <!-- <a class="navbar-brand" href="#">Ecletic.Music</a> -->
		<a class="navbar-brand" href="../portal/">
			<img src="images/home/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
			Ecletic.Music
		</a>
    <!-- Icone de busca -->
    <a href="#"><i class="form-inline fas fa-search"></i></a>
    <!-- menu oculto -->
    <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
    <div class="side-menu-sec">
      <a href="#" class="menu-close">&times;</a>
      <ul class="paginas">
        <li><a href="classica/index.php">Classica</a></li>
        <li><a href="hip-hop/index.php">Hip-Hop</a></li>
        <li><a href="indie/index.php">Indie</a></li>
        <li><a href="pop/index.php">Pop</a></li>
        <li><a href="punk/index.php">Punk</a></li>
        <li><a href="sertanejo/index.php">Sertanejo</a></li>
      </ul>
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
      <li class="nav-item icone">
        <!-- <a class="nav-link active" href="#"></i> Home</a> -->
        <a class="nav-link active" href="#" title="Home">
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text">Home</span>
        </a>
      </li>
      <li class="nav-item icone">
        <!-- <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Noticias</a> -->
        <a class="nav-link active" href="#" title="Noticias">
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text">Noticias</span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Ranking</a> -->
        <a class="nav-link active" href="#" title="Ranking">
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text">Ranking</span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-music"></i> Cifras</a> -->
        <a class="nav-link active" href="#" title="Cifras">
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text">Cifras</span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-headphones"></i> Indicações</a> -->
        <a class="nav-link active" href="#" title="Indicações">
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text">Indicações</span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="far fa-address-card"></i> Quem Somos</a> -->
        <a class="nav-link active" href="#" title="Quem Somos">
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text">Quem Somos</span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contato</a> -->
        <a class="nav-link active" href="#" title="Contato">
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text">Contato</span>
        </a>
      </li>
    </ul>
  </nav>
