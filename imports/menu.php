<!-- Menu top das paginas -->
<!-- definição em PHP para alterar o idioma, OBS: USAR 0 = Pt-BR 1 = En-US-->
<?php
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteudo");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content");
	$menu = array($menu_pt, $menu_en);
	// print_r($menu);
	if (!isset($_GET['i'])) {
		$_GET['i']=0;
	}
 ?>
	<nav id="navheader" class="navbar navbar-light">
    <!-- botão do menu secundario com as paginas -->
    <!-- <a href="#" class="navbar-nav slide-menu-open">Open Menu</a> -->
    <div class="navbar-nav slide-menu-open">
      <a href="#" class="navbar-nav slide-menu-open"> <i class="fas fa-bars"></i></a>
    </div>
    <!-- logo -->
    <!-- <a class="navbar-brand" href="#">Ecletic.Music</a> -->
		<a class="navbar-brand" href="./">
			<img src="images/principal/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
			Ecletic.Music
		</a>
    <!-- Icone de busca -->
    <a href="#"><i class="form-inline fas fa-search"></i></a>
    <!-- menu oculto -->

    <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
    <div class="side-menu-sec">
      <a href="#" class="menu-close">&times;</a>
      <ul class="paginas">
				<li>PAGINAS SECUNDARIAS</li>
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
        <a class="nav-link" href="index.php" title="<?php echo $menu[$_GET['i']][0]?>">
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][0]?></span>
        </a>
      </li>
      <li class="nav-item icone">
        <!-- <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Noticias</a> -->
        <a class="nav-link" href="noticias.php" title="<?php echo $menu[$_GET['i']][1]?>">
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][1]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Ranking</a> -->
        <a class="nav-link" href="ranking.php" title="<?php echo $menu[$_GET['i']][2]?>">
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][2]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-music"></i> Cifras</a> -->
        <a class="nav-link" href="cifras.php" title="<?php echo $menu[$_GET['i']][3]?>">
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][3]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-headphones"></i> Indicações</a> -->
        <a class="nav-link" href="indicacoes.php" title="<?php echo $menu[$_GET['i']][4]?>">
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][4]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="far fa-address-card"></i> Quem Somos</a> -->
        <a class="nav-link" href="quem-somos.php" title="<?php echo $menu[$_GET['i']][5]?>">
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][5]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contato</a> -->
        <a class="nav-link" href="contato.php" title="<?php echo $menu[$_GET['i']][6]?>">
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text"> <?php echo $menu[$_GET['i']][6]?></span>
        </a>
      </li>
    </ul>
  </nav>
