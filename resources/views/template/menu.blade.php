
@php($nombreRuta = Route::currentRouteName())


<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo @if($nombreRuta=='home') colorBG2 @else @endif"
        style="color: @if($nombreRuta=='home') white @else #802434 @endif;">
        <i class="nav-icon dorado fa fa-graduation-cap"></i>
        <p> <b> Escuela </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;">
        <i class="nav-icon dorado fa fa-users"></i>
        <p> <b> Personal </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;">
        <i class="nav-icon dorado fas fa-file-invoice"></i>
        <p> <b> Claves presupuestales </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;">
        <i class="nav-icon dorado far fa-calendar"></i>
        <p> <b> Horarios </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;">
        <i class="nav-icon dorado fa fa-newspaper"></i>
        <p> <b> Plantilla personal </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;">
        <i class="nav-icon dorado fas fa-file-import"></i>
        <p> <b> Reportes </b></p>
    </a>
</li>