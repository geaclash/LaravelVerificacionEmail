@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header"><h1>Registro confirmado</h1></div>
                <div class="card-body">
                    Te has registrado correctamente, ya puedes <a href="{{url('/login')}}">ingresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection