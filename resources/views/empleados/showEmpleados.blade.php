<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Información del empleado.
        </h2>
    </x-slot>
    <section>
        <div class="container-fluid">
            <a class="btn btn-info mt-4" href="/empleados/create" role="button">Dar de alta nuevo empleado.</a>
            <a class="btn btn-info mt-4" href="{{ route('empleados.index') }}" role="button">Regresar al menu Empleados.</a>
            <a class="btn btn-info mt-4" href="{{ route('empleados.edit', [$empleado->id]) }}" role="button" >Editar información del empleado.</a>
            <br><br>
            <div class="row">
                <div class="col-xl-8 col-lg-7 table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr class="bg-info">
                            <th scope="col" class="text-light">ID</th>
                            <th scope="col" class="text-light">Nombre</th>
                            <th scope="col" class="text-light">Telefono</th>
                            <th scope="col" class="text-light">Direccion</th>
                            <th scope="col" class="text-light">Fecha de contratación</th>
                            <th scope="col" class="text-light">Estado</th>
                        </tr>
                        <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->nombreEmpleado }}</td>
                                <td>{{ $empleado->telefonoEmpleado }}</td>
                                <td>{{ $empleado->direccionEmpleado }}</td>
                                <td>{{ $empleado->fechaAltaEmpleado }}</td>
                                <td>{{ $empleado->statusEmpleado }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <form action="{{ route('empleados.destroy',[$empleado]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info">Eliminar registro</button>
            </form>
        </div>
    </section>
</x-app-layout>