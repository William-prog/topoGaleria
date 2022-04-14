@extends('layouts.app')

@section('content')

<style>
    .btnSaveForm {
        position: relative;
        display: block;
        color: black;
        font-size: 14px;
        font-family: "Arial";
        text-decoration: none;
        margin: 30px 0;
        border: 2px solid black;
        padding: 14px 60px;
        /* text-transform: uppercase; */
        overflow: hidden;
        transition: 1s all ease;
        border-radius: 3%;
    }

    .btnSaveForm::before {
        background: #FF771F;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        transition: all 0.6s ease;
        border-radius: 3%;
        color: black;
    }

    .btnSaveForm1::before {
        width: 0%;
        height: 100%;
        color: black;
    }

    .btnSaveForm1:hover::before {
        width: 100%;
        color: black;
    }

    .navigation ul li a .icon {
        padding-top: 9%;
    }
</style>
<style>
    .container {
        background-color: rgb(255, 255, 255, 0.8);
        border-radius: 15px;
        width: 50%;
    }
</style>


<div class="container justify-content-center">
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
        </div>
        <div>
            Verificar cuidadosamente los datos, ya que al momento de aceptar/rechazar el vale no se podra realizar ningun cambio.
        </div>
    </div>

    <input readonly value="{{isset($registroVale->valeCombustibleFechaLarga)?$registroVale->valeCombustibleFechaLarga:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleFechaLarga" id="valeCombustibleFechaLarga" style="display: none;">
    <input readonly value="{{isset($registroVale->valeCombustibleFechaCorta)?$registroVale->valeCombustibleFechaCorta:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleFechaCorta" id="valeCombustibleFechaCorta" style="display: none;">
    <input readonly value="{{isset($registroVale->valeCombustibleFolio)?$registroVale->valeCombustibleFolio:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleFolio" id="valeCombustibleFolio" style="display: none;">
    <input readonly value="{{isset($registroVale->valeCombustibleNumSolicitante)?$registroVale->valeCombustibleNumSolicitante:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleNumSolicitante" id="valeCombustibleNumSolicitante" style="display: none;">
    <input readonly value="{{isset($registroVale->valeCombustibleId)?$registroVale->valeCombustibleId:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleId" id="valeCombustibleId" style="display: none;">



    <table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="margin-left: 0%; margin-right: 0%; border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
        <tr style="background-color: #242424;">
            <td style="width: 10%; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; padding-right: 10px; border-left: 1px solid #A5A8B1;">
                <img src="/img/LogoBlanco.png" width="100" height="30%">
            </td>
            <td style="border-right: 1px solid #A5A8B1; padding-top: 5px; text-align: left;" class="image-container">
                <strong style="font-size: 18px; color: #FF771F;">
                    VALE DE COMBUSTIBLE
                </strong>
            </td>

        </tr>
    </table>

    <table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#000000" style="margin-left: 0%; margin-right: 0%; border-collapse:collapse; border-color:#ddd; vertical-align:text-top; background-color: #fff;">
        <tr>
            <td style="width: 60%; padding: 1%; border-right: 0px solid #A5A8B1;" class="image-container">
                <strong>
                    Servicios y Equipos Topo S.A de C.V <br>
                    Carretera a Valdecañas km 1.5 km <br>
                    Col La Paz, C.P 9990 <br>
                    Fresnillo, Zacatecas, Mexico <br>
                    Tel: 492 134 02 83
                </strong>
            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 30px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                Fecha:
            </td>
            <td style="width: 20%; padding-top: 0px; padding-left: 10px; padding-bottom: 30px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleFecha)?$registroVale->valeCombustibleFecha:''}}" type="date" placeholder="000" class="form-control" name="valeCombustibleFecha" id="valeCombustibleFecha">
            </td>
        </tr>
    </table>

    <table width="100%" border="" cellpadding="0" cellspacing="1" bordercolor="#000000" style="margin-left: 0%; margin-right: 0%; border-collapse:collapse; border-color:#ddd; vertical-align:text-top; background-color: #fff;">
        <tr>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-right: 0px solid #A5A8B1;" class="image-container">
                Solicitante:
            </td>
            <td style="width: 50%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleSolicitante)?$registroVale->valeCombustibleSolicitante:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleSolicitante" id="valeCombustibleSolicitante">
            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                Vehiculo:
            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                No. Economico:
            </td>
            <td style="width: 20%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleNoEco)?$registroVale->valeCombustibleNoEco:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleNoEco" id="valeCombustibleNoEco">
            </td>
        </tr>
        <tr>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-right: 0px solid #A5A8B1;" class="image-container">
                Departamento:
            </td>
            <td style="width: 50%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleDepartamento)?$registroVale->valeCombustibleDepartamento:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleDepartamento" id="valeCombustibleDepartamento">
            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">

            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                Placas:
            </td>
            <td style="width: 20%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustiblePlacas)?$registroVale->valeCombustiblePlacas:''}}" type="text" placeholder="000" class="form-control" name="valeCombustiblePlacas" id="valeCombustiblePlacas">
            </td>
        </tr>
        <tr>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-right: 0px solid #A5A8B1;" class="image-container">
                C.C.:
            </td>
            <td style="width: 50%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleCentroCostos)?$registroVale->valeCombustibleCentroCostos:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleCentroCostos" id="valeCombustibleCentroCostos">
            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">

            </td>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                Kilometraje:
            </td>
            <td style="width: 20%; padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleKilometraje)?$registroVale->valeCombustibleKilometraje:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleKilometraje" id="valeCombustibleKilometraje">
            </td>
        </tr>
        <tr>
            <td style="width: 10%; padding-top: 0px; padding-left: 10px; padding-bottom: 0px; padding-right: 10px; border-right: 0px solid #A5A8B1;" class="image-container">
                M/M/A:
            </td>
            <td colspan="5" style="width: 90%;">
                <input readonly value="{{isset($registroVale->valeCombustibleMarcaModeloAño)?$registroVale->valeCombustibleMarcaModeloAño:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleMarcaModeloAño" id="valeCombustibleMarcaModeloAño">
            </td>
        </tr>
    </table>

    <table width="100%" border="2" cellpadding="0" cellspacing="1" bordercolor="#000000" style="margin-left: 0%; margin-right: 0%; border-collapse:collapse; border-color:#000; vertical-align:text-top; background-color: #fff;">
        <tr style="background-color: black; color: white; text-align: center;">
            <td style="width: 20%; border-right: 1px solid #fff;" class="image-container">
                <strong>
                    IMPORTE EN LITROS
                </strong>
            </td>
            <td style="width: 60%; border-right: 1px solid #fff;" class="image-container">
                <strong>
                    CANTIDAD EN LETRA
                </strong>
            </td>
            <td style="width: 20%; padding-top: 0px; padding-left: 10px; padding-bottom: 30px; padding-right: 10px; border-left: 0px solid #A5A8B1;">

            </td>
        </tr>
        <tr style="text-align: center;">
            <td style="width: 20%; border-right: 1px solid #000;" class="image-container">
                <input readonly value="{{isset($registroVale->valeCombustibleLitrosEnNumero)?$registroVale->valeCombustibleLitrosEnNumero:''}}" type="number" placeholder="000" class="form-control" name="valeCombustibleLitrosEnNumero" id="valeCombustibleLitrosEnNumero">
            </td>
            <td style="width: 60%; border-right: 1px solid #000;" class="image-container">
                <input readonly value="{{isset($registroVale->valeCombustibleLitrosEnLetra)?$registroVale->valeCombustibleLitrosEnLetra:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleLitrosEnLetra" id="valeCombustibleLitrosEnLetra">
            </td>
            <td style="width: 20%; padding-top: 5px; padding-left: 10px; padding-bottom: 5px; padding-right: 10px; border-left: 0px solid #A5A8B1;">
                <input readonly value="{{isset($registroVale->valeCombustibleTipoCombustible)?$registroVale->valeCombustibleTipoCombustible:''}}" type="text" placeholder="000" class="form-control" name="valeCombustibleTipoCombustible" id="valeCombustibleTipoCombustible">
            </td>
        </tr>

        <tr style="text-align: center;">
            <td style="width: 20%; border-top: 1px solid #000; padding-top: 5px; padding-left: 10px; padding-bottom: 5px; padding-right: 10px; border-left: 0px solid #A5A8B1;"" class=" image-container">
                <strong>
                    AUTORIZADO:
                </strong>
            </td>
            <td colspan="2" style="width: 60%; border-top: 1px solid #000; border-right: 1px solid #fff;" class="image-container">
                <strong>
                    <input readonly value="{{Auth::user()->name}}" type="text" placeholder="000" class="form-control" name="valeCombustibleAutorizo" id="valeCombustibleAutorizo">
                </strong>
            </td>
        </tr>
    </table>
    <br>
    <style>
        .middle {
            position: inherit !important;
            width: 25% !important;
            transform: translate(150%, -50%);
            /* background-color: rgb(255 255 255 / 75%); */
        }

        .btnSave {

            position: relative;
            display: block;
            color: black;
            font-size: 14px;
            font-family: "Arial";
            text-decoration: none;
            margin: 30px 0;
            border: 2px solid black;
            padding: 14px 60px;
            /* text-transform: uppercase; */
            overflow: hidden;
            transition: 1s all ease;
            border-radius: 3%;
        }

        .btnSave::before {
            background: #FF771F;
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.6s ease;
            border-radius: 3%;
            color: black;
        }

        .btn1::before {
            width: 0%;
            height: 100%;
            color: black;
        }

        .btn1:hover::before {
            width: 100%;
            color: black;
        }
    </style>


    @if( Auth::user()->rol == 'Conductor')
    <div style="margin-bottom: -6%; text-align: center; width: 100%; padding: 2%; font-size: 0.8vw;" class="alert alert-success" role="alert">
        <h4> <i class="fas fa-smile"></i> <strong> No tienes permisos de Administrador </strong> </h4>
    </div>
    @endif

    @if( Auth::user()->rol == 'Administrador')
    <div class="row mt-1">
        <div class="form-group col-12">
            <style>
                input[type=radio] {
                    width: 100%;
                    height: 2em;
                    opacity: 0;
                    cursor: pointer;
                    margin: auto;
                }

                .radio-group div {
                    width: 150px;
                    display: inline-block;
                    border: 3px solid #242424;
                    border-radius: 5px;
                    text-align: center;
                    position: relative;
                }

                .radio-group label {
                    position: absolute;
                    border-radius: 4px;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    line-height: 2em;
                    pointer-events: none;
                }

                /* .radio-group input[type=radio]:checked+label {
                    background: #1C7298;
                    color: #fff;
                } */

                .radio-group input[id="cls_opcion_S"]:checked+label {
                    background-color: green;
                    font-weight: 600;
                    color: #fff;
                    box-shadow: 0 1px 1px #0000002e;
                    text-shadow: 0 1px 0px #79485f7a;
                }

                .radio-group input[id="cls_opcion_N"]:checked+label {
                    background-color: red;
                    font-weight: 600;
                    color: #fff;
                    box-shadow: 0 1px 1px #0000002e;
                    text-shadow: 0 1px 0px #79485f7a;
                }
            </style>

            @if($registroVale->valeCombustibleEstado == 'Pendiente')
            <div class="radio-group mx-auto" style="padding-left: 30%;">
                <div>
                    <input type="radio" id="cls_opcion_S" name="valeCombustibleEstado" value="Aceptado" checked />
                    <label for="opt1">Aceptar</label>
                </div>
                <div>
                    <input type="radio" id="cls_opcion_N" name="valeCombustibleEstado" value="Cancelado" />
                    <label for="opt2">Rechazar</label>
                </div>
            </div>
            @endif
            @if($registroVale->valeCombustibleEstado == 'Aceptado')
            <div style="margin-bottom: -6%; text-align: center; width: 100%; padding: 2%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                <h4> <i class="fas fa-smile"></i> <strong> Este vale fue Aceptado </strong> </h4>
            </div>
            @endif
            @if($registroVale->valeCombustibleEstado == 'Cancelado')
            <div style="margin-bottom: -6%; text-align: center; width: 100%; padding: 2%; font-size: 0.8vw;" class="alert alert-danger" role="alert">
                <h4> <i class="fas fa-frown"></i> <strong> Este vale fue Rechazado </strong> </h4>
            </div>
            @endif
            @if($registroVale->valeCombustibleEstado == 'Expirado')
            <div style="margin-bottom: -6%; text-align: center; width: 100%; padding: 2%; font-size: 0.8vw;" class="alert alert-dark" role="alert">
                <h4> <i class="fas fa-history"></i> <strong> Este vale fue Expirado </strong> </h4>
            </div>
            @endif

        </div>
    </div>



    @if($registroVale->valeCombustibleEstado == 'Pendiente')
    <div class="form-group col-md-12">
        <div class="middle">
            <button type="submit" style="cursor: pointer" class="btnSave btn1">
                {{ __('Confirmar ') }}
            </button>
        </div>
    </div>
    @endif
    @endif


</div>



@endsection