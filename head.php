<head>
  <meta charset="utf-8">
  <title>Ecletic.Music | O Portal da Musica</title>
  <meta name="description" content="Portal de Musica-Projeto integrador">
  <meta name="author" content="Karina, Rafael, Reginaldo, Renata, Thais, Victor - Os Ursal">
  <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
//PHP para ajustar o path do diretorio dos CSS e outros links
	$URL_ATUAL= "$_SERVER[REQUEST_URI]";
	$pagina = explode("/", $URL_ATUAL);
	if ($pagina[2]== ""){
		echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
		echo '<link rel="stylesheet" href="css/mystyle.css">';
		echo '<link rel="icon" type="image/png" href="images/favicon.png">';
		//echo "IF " .$pagina[2];
	}else{
		echo '<link rel="stylesheet" href="../css/bootstrap.min.css">';
		echo '<link rel="stylesheet" href="../css/mystyle.css">';
		echo '<link rel="icon" type="image/png" href="../images/favicon.png">';
		//echo "else " .$pagina[2];
	}
?>

</head>
