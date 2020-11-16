<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Empleados
        </h2>
        <h3 class>
            Menu de administración de empleados en Vidrieria Ruvalcaba.
        </h3>
    </x-slot>
    <section>
        <div class="container-fluid">
            <div class="row table-responsive">
                <div class="col-8 ml-4 mt-4">
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
                                <td>{{ $empleado->nombreEmpleado }}</td>
                                <td>{{ $empleado->telefonoEmpleado }}</td>
                                <td>{{ $empleado->direccionEmpleado }}</td>
                                <td>{{ $empleado->fechaAltaEmpleado }}</td>
                                <td>{{ $empleado->statusEmpleado }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>