<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Información del producto.
        </h2>
    </x-slot>
    <section>
        <div class="container-fluid">
            <a class="btn btn-info mt-4" href="/productos/create" role="button">Dar de alta nuevo producto.</a>
            <a class="btn btn-info mt-4" href="{{ route('productos.index') }}" role="button">Regresar al menu Productos.</a>
            <a class="btn btn-info mt-4" href="{{ route('productos.edit', [$producto->id]) }}" role="button" >Editar información del producto.</a>
            <br><br>
            <div class="row">
                <div class="col-xl-8 col-lg-7 table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr class="bg-info">
                            <th scope="col" class="text-light">ID</th>
                            <th scope="col" class="text-light">Nombre del producto</th>
                            <th scope="col" class="text-light">Precio</th>
                            <th scope="col" class="text-light">Medidas</th>
                            <th scope="col" class="text-light">Piezas</th>
                            <th scope="col" class="text-light">Grosor</th>
                            <th scope="col" class="text-light">Color</th>
                            <th scope="col" class="text-light">Forma</th>
                        </tr>
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td><a href="/productos/{{ $producto->id }}">{{ $producto->nombreProducto }}</a></td>
                            <td>{{ $producto->precioProducto }}</td>
                            <td>{{ $producto->medidaProducto }}</td>
                            <td>{{ $producto->piezasProducto }}</td>
                            <td>{{ $producto->grosorProducto }}</td>
                            <td>{{ $producto->colorProducto }}</td>
                            <td>{{ $producto->formaProducto }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <form action="{{ route('productos.destroy',[$producto]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info">Eliminar registro</button>
            </form>
        </div>
    </section>
</x-app-layout>