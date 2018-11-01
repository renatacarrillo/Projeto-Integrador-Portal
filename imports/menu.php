<!-- Menu top das paginas -->
<!-- definição em PHP para alterar o idioma, OBS: USAR PT = Pt-BR EN = En-US usar a variavel $ID  para definicar a posição da linha da Matriz-->
<?php
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteudo");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content");
	//$menu = array($menu_pt, $menu_en);
	$menu = array('PT'=> $menu_pt,'EN' => $menu_en);
	// print_r($menu);
	if (!isset($_GET['i'])) {
		$_GET['i']='PT';
	}
	$ID = $_GET['i'];
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
        <li><a href="<?php echo "classica/index.php?i=".$ID?>">Classica</a></li>
        <li><a href="<?php echo "hip-hop/index.php?i=".$ID?>">Hip-Hop</a></li>
        <li><a href="<?php echo "indie/index.php?i=".$ID?>">Indie</a></li>
        <li><a href="<?php echo "pop/index.php?i=".$ID?>">Pop</a></li>
        <li><a href="<?php echo "punk/index.php?i=".$ID?>">Punk</a></li>
        <li><a href="<?php echo "sertanejo/index.php?i=".$ID?>">Sertanejo</a></li>
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
        <a class="nav-link" href="<?php echo "index.php?i=".$ID?>" title="<?php echo $menu[$ID][0]?>">
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][0]?></span>
        </a>
      </li>
      <li class="nav-item icone">
        <!-- <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Noticias</a> -->
        <a class="nav-link" href="<?php echo "noticias.php?i=".$ID?>" title="<?php echo $menu[$ID][1]?>">
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][1]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Ranking</a> -->
        <a class="nav-link" href="<?php echo "ranking.php?i=".$ID?>" title="<?php echo $menu[$ID][2]?>">
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][2]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-music"></i> Cifras</a> -->
        <a class="nav-link" href="<?php echo "cifras.php?i=".$ID?>" title="<?php echo $menu[$ID][3]?>">
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][3]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-headphones"></i> Indicações</a> -->
        <a class="nav-link" href="<?php echo "indicacoes.php?i=".$ID?>" title="<?php echo $menu[$ID][4]?>">
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][4]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="far fa-address-card"></i> Quem Somos</a> -->
        <a class="nav-link" href="<?php echo "quem-somos.php?i=".$ID?>" title="<?php echo $menu[$ID][5]?>">
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][5]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contato</a> -->
        <a class="nav-link" href="<?php echo "contato.php?i=".$ID?>" title="<?php echo $menu[$ID][6]?>">
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][6]?></span>
        </a>
      </li>
    </ul>
  </nav>
