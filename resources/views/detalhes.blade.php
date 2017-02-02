
@extends('base')
@section('conteudo')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Detalhes: {{$curso->nome}}</h1>
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
                <div  class="img-responsive" alt="">

                    <div class="embed-responsive embed-responsive-4by3" id="apresentacao"> <iframe class="embed-responsive-item" src="{{$curso->video}}" frameborder="0" allowfullscreen autoplay="true"></iframe> </div>

                    <div class="live-preview">
                    <a href="#" class="btn btn-common uppercase" data-toggle="modal" data-target="#register">MATRICULE-SE</a>
                </div>
                    
                </div>
            </div>

            <div class="col-sm-6">
            
                <div class="project-name overflow">
                    <h2 class="bold">{{$curso->nome}}</h2>
                    <ul class="nav navbar-nav navbar-default">
                        <li><a href="#"><i class="fa fa-clock-o"></i>Começa em {{$curso->inicio}}</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>{{$curso->categoriacurso->nome}}</a></li>
                    </ul>
                </div>
                <div class="project-info overflow">
                    <h3>Descrição do curso</h3>
                    <p>{{$curso->descricao}}</p>
                    <ul class="elements">

                    <h3>Matérias</h3>
                        @foreach ($materias as $materia)
                        
                        <li><i class="fa fa-angle-right"></i>{{$materia->nome}}</li>
                        
                        @endforeach
                    </ul>
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

            
        </div>
    </div>
</section>
    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastre-se: {{$curso->nome}}</h5>
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> --}}
          </div>
          <div class="modal-body">
            
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="niveis_id" value="2">
                        <input type="hidden" name="pago" value="0">
                        <input type="hidden" name="cursointeresse" value="{{$curso->id}}">
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            
          </div>
        </div>
      </div>

            <script>

            addvideo = function() {
            $('#video').append('<div class="embed-responsive embed-responsive-16by9" id="apresentacao"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vjQEGz8ASvs" frameborder="0" allowfullscreen autoplay="true"></iframe> </div>');
            }
           

            removeframe = function() {
            document.getElementById('apresentacao').remove()
            }

           
            </script>
    </div>
<!--/#related-work-->

@endsection