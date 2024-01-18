@php( $semestre = " febrero - julio 2023" )
@php( $periodo  = " Del 22 al 28 de mayo de 2023" )


@extends('template.inicio')

@section('title')
    EVALUACIÓN AL DESEMPEÑO DEL PERSONAL DOCENTE
@endsection

@section('header_img')
    <img src="img/log_edomex.png" class="anch img-fluid" >&nbsp;
    <b style="color:#802434; font-family: Italic; font-size:40px;">  <i>SEIEM</i> </b>
@endsection

@section('header_text')
    <span class="tx guinda" style=" font-family: Italic; font-size:22px;">
    <b>
        Sistema de Evaluación al desempeño del personal docente 
        <br>
        <span class="dorado">
            De las Instituciones de Educación Superior de
            <i>SEIEM</i>
        </span>
        <br><br>
        Semestre {{ $semestre}}. {{ $periodo  }}        
    </b>
    </span>
    <br>
@endsection

@section('content')


        @if (Route::has('login'))
            @auth
                @section('content_img')
                    <a class="nav-link" href="{{ url('docentes') }}" >
                        IR A EVALUACIÓN DOCENTE <img class="img-fluid" src="img/evaluacion.png" width="20%">
                    </a>
                @endsection
            @else
                @section('content_img')
                    <img class="img-fluid" src="img/evaluacion.png" width="25%">
                @endsection

                @section('login')


                        @php( $fec = date('Y-m-d') )

                        @if( $fec > "2023-12-31" )
                            @include('logg')
                        @else
                            <h1 style="color:#802434; font-family: Helvetica;">
                                <center>
                                    GRACIAS POR TU PARTICIPACIÓN<br>
                                    <span class="fa fa-handshake-o"></span>
                                </center>
                            </h1>  

                        @endif










                @endsection
            @endauth
        @endif

@endsection

