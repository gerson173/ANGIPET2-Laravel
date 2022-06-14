<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PRODUCTOS SISAV </title>
    <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">   
</head>
<h1 align="center"> PAGINA DE INICIO DE PRODUCTOS</h1>
<style>
        body{
            background-image: url(imagenes/fondoproductos.jpg);
                margin:0%;
        }
</style>
<a href="{{url('productos/create')}}" style="color:purple; font-size:30px"> REGISTRAR PRODUCTO ➦</a>

<table style="font-size:25px" >
    <thead>
        <tr>
            <th>ID </th>
            <th> | NombreProducto </th>
            <th> | DescripcionProducto    </th>
            <th> |CostoProducto  </th>
            <th> |CantidadProducto </th>
            <th> |Acciones </th>
            
        <tr>
    </thead>
    <tbody>

    @foreach ($productos as $productos)
    <tr>
        <td>{{$productos->id}} </td>
        <td>{{$productos->nombreproducto}} </td>
        <td>{{$productos->descripcionproducto}} </td>
        <td>{{$productos->costoproducto}} </td>
        <td>{{$productos->cantidadproducto}} </td>
        <td>
        
            <a href="{{url('/productos/'.$productos->id.'/edit')}}"> EDITAR </a>

            <form method="post" action="{{url('/productos/'.$productos->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button style="background-color:blue ; font-size:18px" type="submit " onclick="return confirm('¿Estas Seguro 🐕 ?');"> BORRAR </button>
            </form>
            
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
<a href="{{url('/')}}" style="color:red; font-size:20px"> Regresar al Menu Principal</a>

