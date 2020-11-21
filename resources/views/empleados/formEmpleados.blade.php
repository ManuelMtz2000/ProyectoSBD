<x-app-layout>
    <x-slot name="header">
        <h2 class="display-4">
            Registro de información del empleado
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
            @if(isset($empleado))
                <form action="{{ route('empleados.update',[$empleado])}}" method="POST">
                    @method('patch')
            @else
                <form action="{{ route('empleados.store')}}" method="POST" class="content-center">
            @endif
                @csrf
                <div class="form-group row">
                    <label for="nombreEmpleado" class="col-xl-4 text-2xl text-right">Nombre:</label>
                    <input class="form-control" type="text" name="nombreEmpleado" value="{{ old('nombreEmpleado') ?? $empleado->nombreEmpleado ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="telefonoEmpleado" class="col-xl-4 text-2xl text-right">Telefono: </label>
                    <input class="form-control" type="text" name="telefonoEmpleado" value="{{ old('telefonoEmpleado') ?? $empleado->telefonoEmpleado ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="direccionEmpleado" class="col-xl-4 text-2xl text-right">Dirección: </label>
                    <input class="form-control" type="text" name="direccionEmpleado" value="{{ old('direccionEmpleado') ?? $empleado->direccionEmpleado ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="fechaAltaEmpleado" class="col-xl-4 text-2xl text-right">Fecha de alta: </label>
                    <input class="date" type="date" name="fechaAltaEmpleado" value="{{ old('direccionEmpleado') ?? $empleado->direccionEmpleado ?? ''}}" style="width: 600px; heigth: 15px">
                </div>
                <div class="form-group row">
                    <label for="statusEmpleado" class="col-xl-4 text-2xl text-right">Estado: </label>
                    <select class="form-select" name="statusEmpleado" style="width: 600px; heigth: 15px">
                        <option value="activo" {{ old('status') == 'activo' ? 'selected' : '' }}{{ isset($empleado) && $empleado->statusEmpleado == 'activo' ? 'selected' : ''}}>Activo</option>
                        <option value="baja" {{ old('status') == 'baja' ? 'selected' : '' }}{{ isset($empleado) && $empleado->statusEmpleado == 'baja' ? 'selected' : ''}}>Baja</option>
                    </select>
                </div>
                <div class="col-xl-7">
                    <button type="submit" class="btn btn-primary float-xl-right col-3">Enviar</button>
                </div>
                <br>
                </form>
        </div>
    </section>
</x-app-layout>