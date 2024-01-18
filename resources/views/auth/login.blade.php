@extends('template.login')

@section('title')
    Acceso 
@endsection


@section('content')
    @section('login')   
    <div  style="font-size:14px;" >
        <center>
            <b class="guinda" style="font-family: Italic; font-size:18px;">
                Acceso 
            </b>
        </center>
    </div>

    <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-2">
            <input  type="text" name="email"
                    style="color:#802434; font-size:12px;"
                    class="form-control  input-sm @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="usuario"
                    autofocus>
            <div class="input-group-append">
          
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>
                        <i class="fa fa-user-times"></i>&nbsp;{{ $message }}
                    </strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3" id="show_hide_password">
            <input  type="password" name="password"
                    style="color:#802434; font-size:12px;"
                    class="tx2 password1 form-control @error('password') is-invalid @enderror"
                    placeholder="contraseña" >
            <div id="pwd" class="input-group-append">
                <div class="input-group-text" title="Ver contraseña">
                    <a href="" style="color:black; font-size:12px;">
                        <i  class="fa fa-eye-slash" 
                            aria-hidden="true" style="color:#802434;"></i>&nbsp;
                    </a>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>
                        <i class="fa fa-user-times"></i>&nbsp;{{ $message }}
                    </strong>
                </span>
            @enderror
        </div>

            <div>
                <p>
                    <input type="checkbox" name="terminos" id="terminos" onclick="AceptaTerminos()"> 
                    <a  style="font-size:12px; color: gray";
                        data-toggle="modal" href='#modalTerminos'>
                        <b> Acepto los términos y condiciones  
                            <i class="fas fa-file-export"></i>
                        </b>
                    </a>
                    <div class="modal fade" id="modalTerminos">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Aviso de privacidad y uso de datos</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Descripción del uso de los datos personales&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </p>
                <button type=submit id="envia" name="envia"
                        class="colorBG btn btn-secondary btn-block btn-sm "
                        style="text-decoration:none; font-size: 14px; color:white;">
                    Ingresar <i class="fa fa-sign-in"></i>
                </button>
            </div>
        </form>
        
        

        <script type="text/javascript">
            $( document ).ready(function() {
                document.getElementById('envia').disabled = true;
            });

            function AceptaTerminos(){
                document.getElementById('envia').disabled = false;
            }
        </script>

        <a  href=""  
            class="btn btn-link btn-block btn-sm "
            style="font-size: 12px; color:gray;">
            <b><i class="fa fa-question-circle-o"></i>
                Olvidaste mi contraseña 
                <i class="fa fa-hand-pointer-o"></i></b>
        </a>
        <hr>
    </div>
    @endsection
@endsection







                    
