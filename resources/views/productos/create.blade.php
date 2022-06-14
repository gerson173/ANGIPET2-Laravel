<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> REGISTRAR PRODUCTOS SISAV </title>
        <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">
        
</head>
<h1>REGISTRAR NUEVO PRODUCTO</h1>
<body style=" background-image: url('{{ asset('/imagenes/fondoregistroproductos.jpg') }}'); background-size: cover; background-position: top center;align-items: center;">

<form action="{{url('productos/store')}}" method="post">
@csrf

<label for="nombreproducto " style="font-size:20px ">Nombre Del Producto   </label>
<input type="text" name="nombreproducto">
<br>
<label for="descripcionproducto" style="font-size:20px">Descripcion Del Producto  </label>
<input pety="text" name="descripcionproducto">
<br>
<label for="costoproducto" style="font-size:20px">Costo Del Producto </label>
<input type="text" name="costoproducto">
<br>
<label for="cantidadproducto" style="font-size:20px">Cantidad Del Producto </label>
<input type="text" name="cantidadproducto">
<br>
<input type="submit" value="Registrar producto" style="color:red; font-size:16px">
</form>
<a href="{{url('/productos')}} "style="color:red; font-size:20px"> Volver</a>
