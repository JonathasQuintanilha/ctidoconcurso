<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CTI do concurso</title>
        @yield('css')
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/animate.min.css" rel="stylesheet">
        <link href="/css/lightbox.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
        </head><!--/head-->
        <body>
            <header id="header">

                <div class="container">
                    <div class="row">
                        <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())


                
                
                @elseif(Auth::user())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ 'Você está logada(o) como ' . Auth::user()->name }}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 overflow">
                            <div class="social-icons pull-right">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-inverse" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                                <h1><img src="/images/logo.png" alt="logo"></h1>
                            </a>
                            
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li  {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="/">Home</a></li>
                                <li {{{ (Request::is('sobrenos') ? 'class=active' : '') }}}><a href="/sobrenos">Sobre Nós</a></li>
                                <li {{{ (Request::is('cursos') || Request::is('cursos/detalhes') ? 'class=active' : '') }}}><a href="/cursos">Cursos</a></li>
                                
                                <li {{{(Request::is('professores') ? 'class=active' : '')}}}><a href="/professores">Professores</a></li>
                                <li {{{(Request::is('materiais') ? 'class=active dropdown' : 'dropdown')}}}>
                                    <a href="/materiais">Materiais <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ route('login') }}">Já tenho cadastro</a></li>
                                        <li><a href="{{ route('register') }}">Cadastrar</a></li>
                                    </ul>
                                </li>
                                {{--  <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog Default</a></li>
                                    <li><a href="blogtwo.html">Timeline Blog</a></li>
                                    <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                    <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                    <li><a href="blogfour.html">Blog Masonary</a></li>
                                    <li><a href="blogdetails.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>    --}}
                        <li {{{ (Request::is('contato') ? 'class=active' : '') }}}><a href="/contato">CONTATO</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Pesquisar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->




    @yield('conteudo');
    



    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Depoimentos</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="/images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                            <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                            <h3><a href="#">- Saul Goodman</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="/images/home/profile2.png" alt=""></a>
                        </div>
                        <div class="media-body">
                        <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                        <h3><a href="">- Gustavo Fring</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="contact-info bottom">
                <h2>Contato</h2>
                <address>
                    <a href="mailto:contato@ctidoconcurso.com.br">contato@ctidoconcurso.com.br</a> <br>
                    Telefone:(21) 12345-6789 <br>
                </address>
                <h2>Endereço</h2>
                <address>
                    Av. Professor Avelino Xanxão, <br>
                    Nº 63, Centro, Queimados, RJ <br>
                </address>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="contact-form bottom">
                <h2>Envie uma mensagem</h2>
                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Deixe sua mensagem"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="copyright-text text-center">
                <p>&copy; CTI do concurso 2016. Todos os direitos reservados.</p>
                <p>Criado por <a target="_blank" href="#">LabColor</a></p>
            </div>
        </div>
    </div>
</div>
</footer>
<!--/#footer-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/js/gmaps.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/lightbox.min.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
@yield('js')
</body>
</html>