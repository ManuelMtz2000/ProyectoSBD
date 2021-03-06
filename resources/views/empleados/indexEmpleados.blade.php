<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Empleados
        </h2>
        <h3>
            Menu de administración de empleados en Vidrieria Ruvalcaba.
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
                            <th scope="col" class="text-light">Telefono</th>
                            <th scope="col" class="text-light">Direccion</th>
                            <th scope="col" class="text-light">Fecha de contratación</th>
                            <th scope="col" class="text-light">Estado</th>
                        </tr>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td><a href="/empleados/{{ $empleado->id }}">{{ $empleado->nombreEmpleado }}</a></td>
                                <td>{{ $empleado->telefonoEmpleado }}</td>
                                <td>{{ $empleado->direccionEmpleado }}</td>
                                <td>{{ $empleado->fechaAltaEmpleado }}</td>
                                <td>{{ $empleado->statusEmpleado }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>      
                <div class="col-xl-4 col-lg-4 mt-4">
                    <a href="{{ route('empleados.create') }}" class="button btn btn-info">Dar de alta nuevo empleado</a>
                    <hr>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="busquedaEmpleado">Buscar empleado: </label>
                            <br>
                            <input type="text" name="busquedaEmpleado" id="buscarE" class="form-control border-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>