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
                    


                    <li><a class="btn btn-default active" href="#" data-filter="*">Todas</a></li>

                    @foreach ($categorias as $categoria)
                        
                    <li><a class="btn btn-default" href="#" data-filter=".categoria{{$categoria->id}}">{{$categoria->nome}}</a></li>
                    
                    @endforeach



                </ul><!--/#portfolio-filter-->
                    
                <div class="portfolio-items">


                @foreach ($cursos as $curso)
                    {{-- expr --}}
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item categoria{{$curso->categoriacurso->id}}">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio/imagemcurso.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{ route('cursos.detalhes', $curso->id) }}"><i class="fa fa-link"></i></a></li>
                                        <li>


                                        <a href="images/portfolio/imagemcurso.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>{{$curso->nome}}</h2>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>




                <div class="portfolio-pagination">
                    <ul class="pagination">
                      {{-- <li><a href="#">left</a></li> --}}
                      {{ $cursos->links() }}
                     {{--  <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->


@stop

