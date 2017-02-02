<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-2.x-git.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />  {{-- this come to the rails.js --}}



        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        
        
        <link href="/css/animate.min.css" rel="stylesheet">
        
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL::asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

        

        <link href="/css/lightbox.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">
        <link href="/bower_components/blueimp-file-upload/css/jquery.fileupload.css" rel="stylesheet">
        

        {{-- SWEET ALERT --}}

        <link rel="stylesheet" href="/css/sweetalert.css" />


        
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       


        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>


       



    </head>


    <body>
        <div id="app">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/home')}}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="{{ route('curso.index') }}">Ver cursos</a></li>
                                        <li><a href="{{ route('curso.create') }}">Adicionar curso</a></li>
                                      </ul>
                                    </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Cadastrar</a></li>
                            
                            @elseif(Auth::user())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}<span class="caret"></span>
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
                </div>
            </nav>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">@yield('title')</div>
                            <div class="panel-body">
                            
                                @yield('content')
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Scripts -->

        <script src="/js/app.js"></script>
        <script src="/js/rails.js"></script>
        

        {{-- sweet alert --}}

        <script src="/js/sweetalert.min.js"></script>
        <script src="/js/inputfile.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
         <script src="{{ URL::asset('js/bootstrap-datepicker.min.js') }}"></script>
         <script src="{{ URL::asset('locales/bootstrap-datepicker.pt-BR.min.js') }}"></script>

       
        {{-- <script async src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.min.js"></script>

        <script async src="/bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
        <script async src="/bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
        



         {{-- CONFIMATON     --}}
        <script>


         function confirmDelete() {   

          swal({
            title: "Tem certeza?",
            text: "Não faça isso se não tiver!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, pode deletar",
            cancelButtonText: "Nãaaaao, cancelar!",
            closeOnConfirm: true,
            closeOnCancel: false
          },

          function(isConfirm){
            if (isConfirm) {
              //swal("Deletado!", "Como você queria.", "success");
              location.reload();
            } else {
              swal("Cancelado", "Uffa, nada foi apagado :)", "error");
            }
           
          });

      }
            
        </script>

        {{-- CONFIMATON     --}}

         <script type="text/javascript">
                        $('#register').on('hidden.bs.modal', function () {
                        $('#register .modal-body').empty();
                        });
                </script>
        <script type="text/javascript">
        $(function () {
          $('#sandbox-container .input-daterange').datepicker({
            startDate: "today",
            todayBstn: "linked",
            clearBtn: true,
            autoclose: true,
            todayHighlight: true
          });});
        </script>
    </body>
</html>