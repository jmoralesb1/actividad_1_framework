@extends('layouts.app')
@section('content')
    <div class ="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
        <div class="card">
            <div class="card-header"><strong>Detalles de Categoria</strong></div>
            <div class="card-header"><strong>ID</strong></div>
            <div class="card-body">
            <p>{{ $category->id }}</p></div>
            <div class="card-header"><strong>Nombre de Categoria</strong></div>
            <div class="card-body">
            <p>{{ $category->category_name }}</p></div>
            
            
                
                <a action="{{ route('categories.edit', $category->id) }}"></a>
                <form action="{{ route('categories.destroy', $category->id) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

@endsection

