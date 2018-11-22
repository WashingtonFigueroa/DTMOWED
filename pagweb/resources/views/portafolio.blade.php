<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DT MOWED</title>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="estilos/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="estilos/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="estilos/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="estilos/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="estilos/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="estilos/css/animate.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="estilos/css/magnific-popup.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="estilos/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="estilos/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="estilos/css/responsive.css" rel="stylesheet">

    <script src="estilos/js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="estilos/js/vendor/html5shim.js"></script>
    <script src="estilos/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <div class="st-content-inner">
                @include ('component.header')

                <section class="page-header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header">
                                    <h1>Portfolio</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="estilos/#">Inicio</a></li>
                                    <li class="active">Portfolio</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>

                <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                            <ul class="list-inline" id="filter">
                                <li><a class="active" data-group="all">Todos</a></li>
                                <li><a data-group="red">Software</a></li>
                                <li><a data-group="green">Aplicaciones Móviles</a></li>
                                <li><a data-group="blue">Mercadeo</a></li>
                                <li><a data-group="numbers">Diseño y Publicidad</a></li>
                            </ul>

                            <div class="row">
                                <div id="grid">
                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-1.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-1.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="http://demo.coatlfact.com/#/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-2.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-2.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="http://restaurant.coatlfact.com/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-3.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-3.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-4.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-4.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-5.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-5.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-6.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-6.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-7.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-7.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-8.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-8.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-9.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-9.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "green", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-10.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-10.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-11.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-11.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-12.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="estilos/img/work/portfolio-12.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="https://www.facebook.com/dteecuador" target="_blank"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->

               @include('component.footer')

            </div> <!-- .st-content-inner -->
        </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->
</div><!-- /st-container -->

@include('component.footerjs')

</body>
</html>
