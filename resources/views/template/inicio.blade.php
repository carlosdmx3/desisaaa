<!DOCTYPE html>
<html lang="en">
<head>

    <title>
    @yield('title')
</title>

<link rel="icon" type="image/jpg" href="img/curse.png"/>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fakeimg {
    height: 200px;
    background: #aaa;
}

.guinda{
    color:#802434;
}

.dorado{
    color:#D4AF37;
}

.colorBG{
    background-color: #802434;
    color: #D4AF37;
}

@media (min-width: 576px) {
    .tx { font-size: 8px; }
    .tx2 { font-size: 8px; }
    .anch {width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 768px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 8px; }
    .anch { width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 992px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 10px; }
    .anch { width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 1200px) {
    .tx { font-size: 18px; }
    .tx2 { font-size: 14px; }
    .anch { width:30% }
    .anchlog { width:50px; }
}


.login-container{
    position: relative;
    width: 360px;
    margin: 40px auto;
    padding: 10px 10px 20px;
    background: #fff;
    border: 1px solid #ccc;
}
.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;
}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);
}
.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}
</style>
</head>
<body>

@yield('header')
<header class="main-header"  style="border:0px;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"> </div>

            <div class="col-8 bg-light shadow-sm" >
                <div class="d-flex-center" style='text-align:center';>
                    <div class="row">
                        <div class="prueba col-12 col-lg-12">
                            @yield('header_img')
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-2"> </div>
        </div>
    </div>
</header>

@yield('content')
<div class="row" style=" margin-top:100px;">
    <div class="col-sm-2">    </div>
    <div class="col-sm-5 " >
        <div class="flex-right">
            <center>
                @yield('header_text')
                @yield('content_img')
            </center>
            <span class="tx2">
                @yield('content_text')
            </span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="login-container shadow">
            <div class="form-box">
                @yield('login')
            </div>
        </div>
    </div>
    <div class="col-sm-2">    </div>
</div>


@yield('footer')
<footer class="main-footer "  style="font-size:10px; margin-top:150px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-5 shadow" style="color:#D4AF37; background-color:#802434; border: .5px solid white;">
                <div class="flex-right">
                    <p>
                    <br>Gobierno del Estado de México
                    <br>Secretaría de Educación
                    <br>Servicios Educativos Integrados al Estado de México
                    <br>Dirección de Educación Siuperior
                    <br>Evaluación de conocimientos
                    </p>
                </div>
            </div>

            <div class="col-3 shadow" style="color:#D4AF37; background-color:#802434; border: .5px solid white;">
                <div class="flex-right">
                <br>
                    <a  href="https://goo.gl/maps/FykCgWiEd7CsyMZq8"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-map-marker" style="color:#D4AF37;"></i>&nbsp;
                            Profesor Agripín Garcia Estrada No. 1306<br>
                            Santa Cruz Atzcapotzaltongo. Toluca, México. C.P. 50030
                    </a>
                <br>
                    <a  href="tel:+527222651600" target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-phone"></i>&nbsp;
                        Tel: 01 (722) 279 77 00 Ext. 1505
                    <br>
                    <a  class="tx"
                        href="https://www.facebook.com/SEIedomex/?ref=ts&amp%3Bfref=ts"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  class="tx"
                        href="https://www.facebook.com/SEIedomex/?ref=ts&amp%3Bfref=ts"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </div>
            </div>
            <div class="col-2"> </div>
        </div>
    </div>
</footer>

</body>
</html>

<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
