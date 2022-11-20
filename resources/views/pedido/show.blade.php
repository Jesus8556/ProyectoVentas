@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? 'Show Pedido' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $pedido->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $pedido->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $pedido->Fecha_Entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $pedido->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
