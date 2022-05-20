@extends('layouts.app')

@section('content')

    <div class="container">
        {{--  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('storeShopping') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label><b>Peso</b></label>
                                    <input type="number" name="weight" min="0"
                                        class="form-control @error('weight') is-invalid @enderror">
                                    @error('weight')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Valor declarado</b></label>
                                    <input type="number" name="declared_value" min="0"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('declared_value')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Origin</b></label>
                                    <input type="text" name="origin"
                                        class="form-control @error('origin') is-invalid @enderror">
                                    @error('origin')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Destino</b></label>
                                    <input type="text" name="destination"
                                        class="form-control @error('destination') is-invalid @enderror">
                                    @error('destination')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Nombre del remitente</b></label>
                                    <input type="text" name="senders_name"
                                        class="form-control @error('senders_name ') is-invalid @enderror">
                                    @error('senders_name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Teléfono del remitente</b></label>
                                    <input type="text" name="sender_phone_number"
                                        class="form-control @error('sender_phone_number') is-invalid @enderror">
                                    @error('sender_phone_number')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Nombre del destinatario</b></label>
                                    <input type="text" name="recipient_name"
                                        class="form-control @error('recipient_name') is-invalid @enderror">
                                    @error('recipient_name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label><b>Teléfono del destinatario</b></label>
                                    <input type="text" name="recipient_phone_number"
                                        class="form-control @error('recipient_phone_number') is-invalid @enderror">
                                    @error('recipient_phone_number')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label><b>Descripción</b></label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror

                                </div>
                                {{-- </div> --}}
                                <div class="col-sm-12">
                                    <button class="btn btn-success btn-lg btm-block mt-5" type="submit">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
