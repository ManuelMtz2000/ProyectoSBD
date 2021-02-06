<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Proveedores
        </h2>
        <h3>
            Menu de administración de proveedores en Vidrieria Ruvalcaba.
        </h3>
    </x-slot>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7 mt-4 table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr class="bg-info">
                            <th scope="col" class="text-light">ID</th>
                            <th scope="col" class="text-light">Nombre</th>
                            <th scope="col" class="text-light">Direccion</th>
                            <th scope="col" class="text-light">Telefono</th>
                            <th scope="col" class="text-light">Email</th>
                        </tr>
                        @foreach ($proveedores as $proveedor)
                            <tr>
                                <td>{{ $proveedor->id }}</td>
                                <td><a href="/proveedor/{{ $proveedor->id }}">{{ $proveedor->nombreProveedor }}</a></td>
                                <td>{{ $proveedor->telefonoProveedor }}</td>
                                <td>{{ $proveedor->direccionProveedor }}</td>
                                <td>{{ $proveedor->fechaAltaProveedor }}</td>
                                <td>{{ $proveedor->statusProveedor }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>      
                <div class="col-xl-4 col-lg-4 mt-4">
                    <a href="{{ route('proveedor.create') }}" class="button btn btn-info">Dar de alta nuevo empleado</a>
                    <hr>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="busquedaProveedor">Buscar empleado: </label>
                            <br>
                            <input type="text" name="busquedaProveedor" id="buscarE" class="form-control border-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>