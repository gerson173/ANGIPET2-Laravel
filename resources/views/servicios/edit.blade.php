<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> EDITAR SERVICIOS SISAV </title>
    <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">    
</head>
<h1>EDITAR SERVICIO</h1>
<body style=" background-image: url('{{ asset('/imagenes/fondoregistroservicios.jpg') }}'); background-size: cover; background-position: top center;align-items: center;">
<form action="/servicios/{{($servicios->id)}}" method="post">
@csrf
@method('PUT')
<label for="descripcionservicio" style="font-size:20px">Descripcion De Servicio </label>
<input  type="text" name="descripcionservicio" value ="{{$servicios->descripcionservicio}}" >
<br>
<label for="tiposervicio" style="font-size:20px">Tipo De Servicio </label>
<input  type="text" name="tiposervicio"value ="{{$servicios->tiposervicio}}" >
<br>
<label for="costoservicio" style="font-size:20px">Costo De Servicio </label>
<input  type="text" name="costoservicio" value ="{{$servicios->costoservicio}}" >
<br>
<br>

<a href="/servicios" style="color:red;"> CANCELAR</a>
<button style="background-color:red"   type="submit"> GUARDAR</button>
</form>
