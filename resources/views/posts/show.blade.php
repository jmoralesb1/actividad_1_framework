@extends('layouts.app')
@section('content')
    <div class ="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><strong>VER POST</strong></div>
                        <div class="card-body">
                            <div class="card-header"><strong>Post</strong></div>
                                <p>{{ $post->title }}</p>
                                <div class="card-header"><strong>Contenido</strong></div>
                                <p>{{ $post->content }}</p>

                
                
                                    <a href="{{ route('posts.edit', $post->id) }}"></a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection