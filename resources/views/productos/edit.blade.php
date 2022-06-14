<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> EDITAR PRODUCTOS SISAV </title>
    <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">
        
</head>
<h1>EDITAR PEODUCTO</h1>
<body style=" background-image: url('{{ asset('/imagenes/fondoregistroproductos.jpg') }}'); background-size: cover; background-position: top center;align-items: center;">
<form action="/productos/{{($productos->id)}}" method="post">
@csrf
@method('PUT')
<label for="nombreproducto" style="font-size:20px">Nombre Del Producto </label>
<input type="text" name="nombreproducto" value ="{{$productos->nombreproducto}}" >
<br>
<label for="descripcionproducto" style="font-size:20px">Descripcion Del Producto  </label>
<input type="text" name="descripcionproducto" value ="{{$productos->descripcionproducto}}" >
<br>
<label for="costoproducto" style="font-size:20px">Costo Del Producto </label>
<input type="text" name="costoproducto"value ="{{$productos->costoproducto}}" >
<br>
<label for="cantidadproducto" style="font-size:20px">Cantidad Del Producto </label>
<input type="text" name="cantidadproducto" value ="{{$productos->cantidadproducto}}" >
<br>
<br>

<a href="/productos" style="color:red;"> CANCELAR </a>
<button  style="background-color:red" type="submit"> GUARDAR</button>
</form>
