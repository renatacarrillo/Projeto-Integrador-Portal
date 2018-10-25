<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/meu.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <title>Ecletic.music</title>

    <?php 
    include('../imports/head.php');
?>


</head>

<body>

    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-8 col-lg-8 mb-4">
                <article id="artistas">
                    <a href="artistas.php">
                        <div id="titleone">
                            <h2 class="boxdiv">Compositores famosos</h2>
                            <h6 class="boxdiv" id="textadj">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Donec id pretium leo. Lorem Ipsum.</h6>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-6 col-md-4 col-lg-4 mb-4">
                <section id="origem">
                    <a href="origem.php">
                        <div id="titletwo">
                            <h2 id="obs">História</h2>
                            <h6 id="textadjtwo">Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. </h6>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-6 col-md-4 col-lg-4">
                <section id="famosas">
                    <a href="famosas.php">
                        <div id="titlethree">
                            <h2 id="obs">Obras</h2>
                            <h6 id="textadjthree">Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. </h6>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <section id="destaques">
                    <a href="destaques.php">
                        <div id="titlefour">
                            <h2>Destaques</h2>
                            <h6 id="textadjfour">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Donec id pretium leo. Lorem Ipsum.</h6>
                        </div>
                    </a>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-4 mt-4">
                <section id="curiosidades">
                    <a href="curiosidades.php">
                        <div id="titlefive">
                            <h2>Para saber mais</h2>
                            <h6 id="textadjfour">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. Donec id pretium leo. Pellentesque. </h6>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"> </script>
    <script src="js/bootstrap.js"> </script>
    <script src="js/nosso-js.js"> </script>
</body>

</html>
