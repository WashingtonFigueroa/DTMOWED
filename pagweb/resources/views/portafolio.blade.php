<!DOCTYPE html>
<html lang="en">
@include('component.head')
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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li class="active">Portfolio Three Column</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>

                <div class="container">
                    <div class="content-wrapper">
                        <div class="inner-content">
                            <ul class="list-inline" id="filter">
                                <li><a class="active" data-group="all">All</a></li>
                                <li><a data-group="red">Red</a></li>
                                <li><a data-group="green">Green</a></li>
                                <li><a data-group="blue">Blue</a></li>
                                <li><a data-group="numbers">Numbers</a></li>
                                <li><a data-group="letters">Letters</a></li>
                                <li><a data-group="square">Squares</a></li>
                                <li><a data-group="circle">Circles</a></li>
                            </ul>

                            <div class="row">
                                <div id="grid">
                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-1.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-1.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-2.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-2.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-3.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-3.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-4.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-4.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-5.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-5.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-6.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-6.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-7.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-7.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-8.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-8.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "green", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-9.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-9.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "green", "circle"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-10.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-10.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "numbers", "blue", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-11.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-11.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->

                                    <div class="portfolio-item col-sm-6 col-md-4" data-groups='["all", "letters", "red", "square"]'>
                                        <div class="single-portfolio">
                                            <img src="estilos/img/work/portfolio-12.jpg" alt="">
                                            <div class="portfolio-links">
                                                <a class="image-link" href="img/work/portfolio-12.jpg"><i class="fa fa-search-plus"></i></a>
                                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                            </div><!-- /.links -->
                                        </div><!-- /.single-portfolio -->
                                    </div><!-- /.portfolio-item -->
                                </div><!-- /#grid -->
                            </div><!-- /.row -->
                        </div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- /.container -->

                <section class="footer-widget-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <p class="subcsribe-text">Quickly utilize installed base channels before premier expertise. Conveniently extend web-enabled niche markets without 2.0 e-markets. Collaboratively incentivize .</p>

                                    <h3>Subscribe to newsletter</h3>

                                    <form>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </form>

                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3>Customer Care</h3>
                                    <ul>
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Platinum Support</a></li>
                                        <li><a href="#">Gold Support</a></li>
                                        <li><a href="#">Standard Support</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Online Training</a></li>
                                        <li><a href="#">Custom Training</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3>Information</h3>
                                    <ul>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Articles</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Awards</a></li>
                                        <li><a href="#">Video Clips</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3>Solutions</h3>
                                    <ul>
                                        <li><a href="#">Contact Center</a></li>
                                        <li><a href="#">Knowledge</a></li>
                                        <li><a href="#">Management</a></li>
                                        <li><a href="#">Web Self-Service</a></li>
                                        <li><a href="#">Performance Metrics</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section>

                <footer class="footer-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; 2015 primex . All Rights Reserved. Designed by <a href="http://www.uicookies.com">uicookies.com</a> </p>
                                </div><!-- /.copyright -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </footer>
            </div> <!-- .st-content-inner -->
        </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->


    <!-- ======== OFFCANVAS MENU ========= -->
    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        <h3>Sidebar Menu</h3>
        <div>
            <div>
                <ul>
                    <li><a href="#">Home</a>
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
                        </ul>
                    </li>

                    <li><a href="#">About</a>
                        <ul>
                            <li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
                            <li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
                            <li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Portfolio</a>
                        <ul>
                            <li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
                            <li class="active"><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
                            <li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
                            <li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
                            <li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
                            <li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Contact</a>
                        <ul>
                            <li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- .offcanvas-menu -->
</div><!-- /st-container -->


@include ('component.footerjs')
</body>
</html>
