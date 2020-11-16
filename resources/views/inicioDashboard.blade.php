<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight display-3">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>
    <section>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th>Precio para clientes</th>
                        <th>Cantidad disponible</th>
                        <th>Descripción</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>