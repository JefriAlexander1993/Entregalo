@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Listar envios') }} <a class="btn btn-primary"  href="{{ route('createShopping') }}"> Crear</a></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Peso</th>
                                <th>Valor declarado</th>
                                <th>Origin</th>
                                <th>Destino</th>
                                <th>Nombre del remitente</th>
                                <th>Teléfono del remitente</th>
                                <th>Nombre destinatario</th>
                                <th>Teléfono destinatario</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shoppings as $shopping)
                        
                            <tr>
                                <td>{{ $shopping->weight }}</td>
                                <td>{{ $shopping->declared_value }}</td>
                                <td>{{ $shopping->origin}}</td>
                                <td>{{ $shopping->destination }}</td>
                                <td>{{ $shopping->senders_name }}</td>
                                <td>{{ $shopping->sender_phone_number }}</td>
                                <td>{{ $shopping->recipient_name }}</td>
                                <td>{{ $shopping->recipient_phone_number }}</td>
                                <td>{{ $shopping->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection