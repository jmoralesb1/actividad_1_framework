@extends('layouts.app')

@section('content')
    <h3>Lista de categorias</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        @if ($category->activa)
                            activa
                        @else
                            inactiva
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary">Editar</a>
                        <a class="btn btn-primary">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
