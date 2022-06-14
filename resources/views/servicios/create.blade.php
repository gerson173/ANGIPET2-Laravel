<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> REGISTRAR SERVICIOS SISAV </title>
<link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">
        
</head>
<h1>REGISTRAR NUEVO SERVICIO</h1>
<body style=" background-image: url('{{ asset('/imagenes/fondoregistroservicios.jpg') }}'); background-size: cover; background-position: top center;align-items: center;">
</style>
<form action="{{url('servicios/store')}}" method="post">
@csrf

<label for="descripcionservicio" style="font-size:20px">Descripcion De Servicio </label>
<input type="text" name="descripcionservicio">
<br>

<label for="tiposervicio" style="font-size:20px">Tipo de Servicio </label>
<input type="text" name="tiposervicio">
<br>
<label for="costoservicio" style="font-size:20px">Costo De Servicio </label>
<input type="text" name="costoservicio">
<br>
<br>
<input type="submit" value="Registrar Servicio" style="color:red; font-size:16px"><br>
</form>
<a href="{{url('/servicios')}}" style="color:red; font-size:20px"> Volver </a>
<br>