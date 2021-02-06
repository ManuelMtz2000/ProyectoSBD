<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Productos
        </h2>
        <h3>
            Menu de administración de Productos en Vidrieria Ruvalcaba.
        </h3>
    </x-slot>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7 mt-4 table-responsive">
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
                        @foreach ($productos as $producto)
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
                        @endforeach
                    </table>
                </div>      
                <div class="col-xl-4 col-lg-4 mt-4">
                    <a href="{{ route('productos.create') }}" class="button btn btn-info">Dar de alta nuevo producto</a>
                    <hr>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="busquedaProducto">Buscar Producto: </label>
                            <br>
                            <input type="text" name="busquedaProducto" id="buscarE" class="form-control border-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>