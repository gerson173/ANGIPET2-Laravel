<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VETERINARIA SISAV </title>
        <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">
        
    </head>
    <body style=" background-image: url('{{ asset('/imagenes/fondo.jpg') }}'); background-size:cover; background-position:top center;align-items:center;">
    <link href="{{ asset('/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
    <div class="content" style="background-color:transparent">
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-md-12" >
                    <div class="card" style="background-color:transparent">
                        <div class="card-header card-header-primary" >
                            <div class="card-tittle" >
                                <h1 align="center">VETERINARIA SISAV ♡</h1>
                            </div>
                        </div>
                        <div class="card-body" >
                            <div class="row text-center"> 
                                <div class="col-sm-12">
                                    <div class="card card-use" style="background-color:transparent; border-style:solid">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="{{url('/servicios')}}" style="color:purple; font-size:20px"> SERVICIOS SISAV </a>
                                                    <br>
                                                     <img src="imagenes/servicios.png" width="100px" height="100px"> 
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                     <div class="card card-use"  style="background-color:transparent">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="{{url('/productos')}}" style="color:purple; font-size:20px"> PRODUCTOS SISAV </a>
                                                    <br>
                                                    <img src="imagenes/productos2.1.png" width="100px"  height="100px">
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    </body>
</html>
