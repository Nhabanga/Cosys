@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    Minha Pagina de Cliente. (view)
                    @foreach ($lista as $key=>$value)
                    <li>{{$value->nome}}</li>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection