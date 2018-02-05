<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Escriba online</title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}"                   rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}"                rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}"                  rel="stylesheet">

        <!-- Automplete -->
        <link href="{{ asset("autoComplete/auto-complete.css") }}"          rel="stylesheet" > 
    
        <!-- magic-check-master -->
        <link href="{{ asset("css/magic-check.css") }}"                     rel="stylesheet">

        {{-- ANIMATED --}}
        <link href="{{ asset("css/animate.css") }}"                         rel="stylesheet">

        <!-- SweetAlert2 -->
        <link href="{{ asset("sweetalert2/dist/sweetalert2.min.css") }}"    rel="stylesheet" >

        <!-- jasny (avatar) -->
        {{-- <link href="{{ asset("jasny/css/jasny-bootstrap.min.css") }}"       rel="stylesheet" media="screen"> --}}
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        


        <!-- Select2 -->
     {{--    <link rel="stylesheet" href="{{ asset("select2/css/select2.css") }}">
        <link rel="stylesheet" href="{{ asset("select2/css/select2-bootstrap.css") }}>
 --}}
        

             
        {{-- CSS Customizado do Projeto --}}

        <link  href="{{ asset('css/styles.css') }}" rel="stylesheet">


        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('conteudo')
                
                @include('includes.footer')
            </div>
        </div>

        

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}">                          </script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}">                       </script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}">                      </script>
        <!-- Autocomplete -->
        <script src="{{ asset("autoComplete/auto-complete.min.js") }}" >        </script>
        <!-- SweetAlert2 -->
        <script src="{{ asset("sweetalert2/dist/sweetalert2.min.js") }}">       </script>
        

        <script src="{{ asset("inputmask/inputmask.js") }}">                    </script>
        <script src="{{ asset("inputmask/inputmask.extensions.js") }}">         </script>
        <script src="{{ asset("inputmask/inputmask.numeric.extensions.js") }}"> </script>
        <script src="{{ asset("inputmask/inputmask.date.extensions.js") }}">    </script>
        <script src="{{ asset("inputmask/inputmask.phone.extensions.js") }}">   </script>
        <script src="{{ asset("inputmask/jquery.inputmask.js") }}">             </script>
        <script src="{{ asset("inputmask/phone.js") }}">            </script>
            
        @stack('scripts')

    </body>
</html>


