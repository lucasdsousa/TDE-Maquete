<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel de Controle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Dispositivo</th>
                                <th scope="col">Local</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($devices as $d)
                                <tr>
                                    <th scope="row">{{ $d->id }}</th>
                                    <td>{{ $d->nome }}</td>
                                    <td>{{ $d->local }}</td>
                                    <td>{{ $d->status }}</td>
                                    <td>
                                        @if($d->status == "OFF")
                                            <form action="/ligar/{{ $d->id }}" method="POST">
                                                @csrf
                                                    <button class="btn btn-outline-primary btn-sm" type="submit" name="btnLampada" value="{{ $d->local }}">Ligar</button>
                                                    <br>
                                                    <br>
                                            </form>
                                        @else
                                            <form action="/desligar/{{ $d->id }}" method="POST">
                                                @csrf
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" name="btnLampada" value="{{ $d->local }}">Desligar</button>
                                                    <br>
                                                    <br>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
