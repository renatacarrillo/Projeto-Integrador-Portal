<!-- definição em PHP para alterar o idioma, OBS: USAR 0 = Pt-BR 1 = En-US-->
<?php
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteudo");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content");
	$menu = array($menu_pt, $menu_en);
//menu das paginas secundarias
	$menu_sec_pt = array("Artistas","Origem","Lançamentos","Destaques","Indicações","Marcos");
	$menu_sec_en = array("Artists","Origin","Releases","Highlights","Indications","Mark");
	$menu_sec = array($menu_sec_pt, $menu_sec_en);
	// print_r($menu);
	if (!isset($_GET['i'])) {
		$_GET['i']=0;
	}

//PHP para alterar a cor do header de acordo com a pagina
	// $URL_ATUAL= "$_SERVER[REQUEST_URI]";
	// $pagina = explode("/", $URL_ATUAL);
	//echo "pagina1 ".$pagina[0];
	//echo "pagina2 ".$pagina[1];
	//echo "pagina3 ".$pagina[2];
	// if ($pagina[2]=="sertanejo"){
	// 	$navheader = '"header-sert"';
	// }elseif ($pagina[2]=="indie"){
	// 	$navheader = '"header-indie"';
	// }elseif ($pagina[2]=="pop"){
	// 	$navheader = '"header-pop"';
	// }	else{
	// 	$navheader = '"navheader"';
	// }

	// echo(basename (dirname($_SERVER['PHP_SELF']),"/")) .'<br>';
	// echo basename(__DIR__) . '<br>' ;
	//pegar o diretorio do arquivo atual
	$pagina = basename (dirname($_SERVER['PHP_SELF']),"/");
 	// echo $pagina;
	if ($pagina=="sertanejo"){
		$navheader = '"header-sert"';
	}elseif ($pagina=="indie"){
		$navheader = '"header-indie"';
	}elseif ($pagina=="pop"){
		$navheader = '"header-pop"';
	}elseif ($pagina=="classica"){
		$navheader = '"header-classica"';
	}	else{
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
	<a class="navbar-brand" href="../">
		<img src="../images/principal/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
		Ecletic.Music
	</a>
  <!-- Icone de busca -->
  <a href="#"><i class="form-inline fas fa-search"></i></a>
  <!-- menu oculto -->

  <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
  <div class="side-menu-sec">
    <a href="#" class="menu-close">&times;</a>
		<!-- menu das paginas principais do site -->
      <ul class="paginas">
        <li>MENU PRINCIPAL</li>
        <li><a  href="../index.php"><i class="fas fa-home"> </i>  <?php echo $menu[$_GET['i']][0]?></a></li>
        <li><a  href="../noticias.php"><i class="far fa-newspaper"> </i>  <?php echo $menu[$_GET['i']][1]?></a></li>
        <li><a  href="../ranking.php"><i class="fas fa-chart-line"> </i>  <?php echo $menu[$_GET['i']][2]?></a></li>
        <li><a  href="../cifras.php"><i class="fas fa-music"> </i>  <?php echo $menu[$_GET['i']][3]?></a></li>
        <li><a  href="../indicacoes.php"><i class="fas fa-headphones"> </i>  <?php echo $menu[$_GET['i']][4]?></a></li>
        <li><a  href="../quem-somos.php"><i class="far fa-address-card"> </i>  <?php echo $menu[$_GET['i']][5]?></a></li>
        <li><a  href="../contato.php"><i class="fas fa-phone"> </i>  <?php echo $menu[$_GET['i']][6]?></a></li>
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
<!-- Menu principal das paginas secundarias-->
<nav id="navprincipal">
  <ul class="nav nav-justified">
	  <li class="nav-item">
		  <a class="nav-link active" href="index.php" title="<?php echo $pagina ?>">
			 	<span class="menu-icon"><i class="fas fa-home "></i></span>
			  <span class="menu-text"> <?php echo ucwords($pagina) ?></span>
		  </a>
	 	</li>
    <li class="nav-item">
      <a class="nav-link active" href="artistas.php" title="<?php echo $menu_sec[$_GET['i']][0]?>">
        <span class="menu-icon"><i class="fas fa-microphone-alt"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$_GET['i']][0]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="origem.php" title="<?php echo $menu_sec[$_GET['i']][1]?>">
        <span class="menu-icon"><i class="fas fa-book-open"></i> </span>
        <span class="menu-text"><?php echo $menu_sec[$_GET['i']][1]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="lancamentos.php" title="<?php echo $menu_sec[$_GET['i']][2]?>">
        <span class="menu-icon"><i class="fab fa-itunes-note"></i> </span>
        <span class="menu-text"><?php echo $menu_sec[$_GET['i']][2]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="destaques.php" title="<?php echo $menu_sec[$_GET['i']][3]?>">
        <span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$_GET['i']][3]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="marcos.php" title="<?php echo $menu_sec[$_GET['i']][4]?>">
        <span class="menu-icon"><i class="fas fa-bookmark"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$_GET['i']][4]?></span>
      </a>
    </li>
  </ul>
</nav>
