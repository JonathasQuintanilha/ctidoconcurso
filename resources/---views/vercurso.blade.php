@extends('base')

@section('conteudo')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Detalhe do curso de "Exemplo"</h1>
                            <p>Matricule-se</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/images/portfolio-details/1.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold">Exemplo de detalhe do curso </h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i>Começa em 10/12/16</a></li>
                            <li><a href="#"><i class="fa fa-tag"></i>Português</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Descrição do curso</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Pontos importantes:</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-check-square"></i>Ponto 1</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>Ponto 2</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>Ponto 3</a></li>
                            <li><a href="#"><i class="fa fa-check-square"></i>Ponto 4</a></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="live-preview">
                        <a href="#" class="btn btn-common uppercase">MATRICULE-SE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->
     
    <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">CURSOS RELACIONADOS</h1>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="/images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="/images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Exemplo de curso relacionado</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="/images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="/images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Exemplo de curso relacionado</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="/images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="/images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Exemplo de curso relacionado</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="/images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="/images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2>Exemplo de curso relacionado</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#related-work-->
@endsection