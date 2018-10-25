<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/meu.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <title>Ecletic.music</title>

    <?php 
    include('/imports/head.php');
?>

</head>

<body>
    <!--NAV-->
    <?php 
    include('/imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <div class="container">
        <!--NAV-->

        <!--NAV ENDS-->
        <!--ARTICLE-->
        <div class="row">
            <div class="col-12 col-md-12 col-lg-5 mt-4 mb-4">
                <article>
                    <div id="famosasdiv">
                        <div class="boxdivf img-fluid">
                            <h5 class="famosastitle">Top 10</h5>
                            <h5 class="famosastitle">♫ Músicas clássicas mais famosas</h5>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-12 col-lg-7 mt-4 mb-4">
                <section>
                    <table class="table table-responsive-lg table-responsive-sm table-responsive-md">
                        <thead class="colorf">
                            <tr>
                                <th></th>
                                <th>Artistas</th>
                                <th>Composições</th>
                                <th>Período</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="first">1º</th>
                                <td class="first">Ludwig Van Beethoven</td>
                                <td class="first">Sonata Ao Luar</td>
                                <td class="first">Classicismo</td>
                            </tr>
                            <tr>
                                <th>2º</th>
                                <td>Claude Debussy</td>
                                <td>Clair De Lune</td>
                                <td>Impressionismo</td>
                            </tr>
                            <tr>
                                <th>3º</th>
                                <td>Frederic Chopin</td>
                                <td>Marche Funèbre</td>
                                <td>Romantismo</td>
                            </tr>
                            <tr>
                                <th>4º</th>
                                <td>Wolfgang Amadeus Mozart</td>
                                <td>Rondó Alla Turca</td>
                                <td>Classicismo</td>
                            </tr>
                            <tr>
                                <th>5º</th>
                                <td>Frans Liszt</td>
                                <td>Rapsódia Húngara Nº2</td>
                                <td>Romantismo</td>
                            </tr>
                            <tr>
                                <th>6º</th>
                                <td>George Gershwin</td>
                                <td>Rhapsody In Blue</td>
                                <td>Século XX e XXI</td>
                            </tr>
                            <tr>
                                <th>7º</th>
                                <td>Ludwig Van Beethoven</td>
                                <td>Sonata Pathétique</td>
                                <td>Classicismo</td>
                            </tr>
                            <tr>
                                <th>8º</th>
                                <td>Robert Schumann</td>
                                <td>Kinderszenen</td>
                                <td>Romantismo</td>
                            </tr>
                            <tr>
                                <th>9º</th>
                                <td>Frederic Chopin</td>
                                <td>Valsa Minuto</td>
                                <td>Romantismo</td>
                            </tr>
                            <tr>
                                <th>10º</th>
                                <td>Johann Sebastian Bach</td>
                                <td>Toccata And Fugue</td>
                                <td>Barroco</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php 
    include('/imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"> </script>
    <script src="js/bootstrap.js"> </script>
    <script src="js/nosso-js.js"> </script>

</body>

</html>
