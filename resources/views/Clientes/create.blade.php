@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Nuevo Cliente</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Creación</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('Clientes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" required>
                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control form-control-sm" required>
                            @error('apellido')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ci">Cédula de Identidad</label>
                            <input type="text" name="ci" id="ci" class="form-control form-control-sm" required>
                            @error('ci')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <input type="text" name="empresa" id="empresa" class="form-control form-control-sm">
                            @error('empresa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control form-control-sm">
                            @error('telefono')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" name="correo" id="correo" class="form-control form-control-sm" required>
                            @error('correo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control form-control-sm">
                    @error('direccion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="genero">Género</label>
                    <select name="genero" id="genero" class="form-control form-control-sm" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    @error('genero')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
