<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Registro de información del producto
        </h2>
    </x-slot>
    <section>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container-fluid mt-4">
            @if(isset($producto))
                <form action="{{ route('productos.update',[$producto])}}" method="POST">
                    @method('patch')
            @else
                <form action="{{ route('productos.store')}}" method="POST" class="content-center">
            @endif
                @csrf
                <div class="form-group row">
                    <label for="nombreProducto" class="col-xl-4 text-2xl text-right">Nombre del producto:</label>
                    <input class="form-control" type="text" name="nombreProducto" value="{{ old('nombreProductos') ?? $producto->nombreProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="precioProducto" class="col-xl-4 text-2xl text-right">Precio: </label>
                    <input class="form-control" type="number" name="precioProducto" value="{{ old('precioProducto') ?? $producto->precioProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="medidaProducto" class="col-xl-4 text-2xl text-right">Medidas: </label>
                    <input class="form-control" type="text" name="medidaProducto" value="{{ old('medidaProducto') ?? $producto->medidaProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="piezasProducto" class="col-xl-4 text-2xl text-right">Numero de piezas: </label>
                    <input class="form-control" type="number" name="piezasProducto" value="{{ old('piezasProducto') ?? $producto->piezasProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="grosorProducto" class="col-xl-4 text-2xl text-right">Grosor: </label>
                    <input class="form-control" type="number" name="grosorProducto" value="{{ old('grosorProducto') ?? $producto->grosorProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="colorProducto" class="col-xl-4 text-2xl text-right">Color: </label>
                    <input class="form-control" type="text" name="colorProducto" value="{{ old('colorProducto') ?? $producto->colorProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="formaProducto" class="col-xl-4 text-2xl text-right">Forma: </label>
                    <input class="form-control" type="text" name="formaProducto" value="{{ old('formaProducto') ?? $producto->formaProducto ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="col-xl-7">
                    <button type="submit" class="btn btn-primary float-xl-right col-3">Enviar</button>
                </div>
                <br>
                </form>
        </div>
    </section>
</x-app-layout>