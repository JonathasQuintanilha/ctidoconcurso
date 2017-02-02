@extends('base')

@section('conteudo')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Nossos Cursos</h1>
                            <p>Separados por categoria</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
<section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">Todos</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".branded">Portugues</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".design">Tribunais</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".folio">Isoladas</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos">Direito</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mobile">Militares</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".mockup">Escolas Técnicas</a></li>
                </ul><!--/#portfolio-filter-->
                    
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes/"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg"  data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg#" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded mockup">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design mobile">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="cursos/detalhes"><i class="fa fa-link"></i></a></li>
                                        <li><a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>Exemplo de curso</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->


@stop