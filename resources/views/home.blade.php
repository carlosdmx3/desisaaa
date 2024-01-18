
@extends('template.master')

@section('title')
@endsection


@section('menu')
    @include('template.menu')
@endsection


@section('content')
<div class="card card-warning card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex">
        <div class="d-flex justify-content-between">
            <b><i class="fab fa-buromobelexperte dorado"></i>&nbsp;
                <span class="guinda2" >
                    Escuela
                </span>
            </b> 
        </div>
    </div>
    <div class="card-body table-responsive guinda" style="font-size:14px;">
            

        <table class="table table-sm">
            <thead class="table-secondary">
                <tr>
                    <th colspan="8">&nbsp;Datos de la escuela</th>
                </tr>
            </thead>
            <tbody>
                <tr class="guinda">
                    <td align="right">
                        Clave CT
                    </td>
                    <td >
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Nombre CT
                    </td>
                    <td colspan="5">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Calle
                    </td>
                    <td colspan="3" width="45%">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Número
                    </td>
                    <td width="10%">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        C.P.
                    </td>
                    <td width="10%">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Municipio
                    </td>
                    <td colspan="2">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Télefono
                    </td>
                    <td>
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Correo
                    </td>
                    <td colspan="2">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Valle
                    </td>
                    <td>
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Número económico
                    </td>
                    <td>
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                    <td align="right">
                        Nombre del Supervisor
                    </td>
                    <td colspan="3">
                        <input  type="text" name="" id=""
                                class="form-control input-sm">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        Departamento
                    </td>
                    <td style="color: black;">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="odepartamentoct">
                                Generales.
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="odepartamentoct">
                                Técnicas
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="odepartamentoct">
                                Telesecundarias
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="odepartamentoct">
                                Educación física
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="odepartamentoct">
                                Oficinas
                            </label>
                        </div>
                    </td>
                    <td align="right">
                        Tipo de CT
                    </td>
                    <td style="color: black;">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="otipoct">
                                Departamento
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="otipoct">
                                Escuela
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="otipoct">
                                Sector
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="otipoct">
                                Zona
                            </label>
                        </div>
                    </td>
                    <td align="right">
                        Turnos
                    </td>
                    <td style="color: black;" colspan="3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="oturnos">
                                Uno
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="oturnos">
                                Dos
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table class="table table-sm col-sm-10">
                            <thead class="table-secondary">
                                <tr align="center">
                                    <th>Datos de turno matutino</th>
                                    <th> 1° </th>
                                    <th> 2° </th>
                                    <th> 3° </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="right">Total de grupos</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de hombres</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de mujeres</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de turno</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td colspan="4">
                        <table class="table table-sm col-sm-11">
                            <thead class="table-secondary">
                                <tr align="center">
                                    <th>Datos de turno vespertino</th>
                                    <th>1°</th>
                                    <th>2°</th>
                                    <th>3°</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    
                                </tr>
                                <tr>
                                    <td align="right">Total de grupos</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de hombres</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de mujeres</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Total de turno</td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                    <td width="5%">
                                        <input  type="" name="" style="width:50px;"
                                                class="form-control input-sm">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

                    

    </div>
</div>


@endsection
