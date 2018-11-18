@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Pancakes</h1>
    <img src="/images/pancake.jpg" style="height: 300px; width: auto;">
    <h2>Ingredients:</h2>
    <ul class="list-group list-group-flush jumbotron">
        <li class="list-group-item"> 1 1/2 cups all-purpose flour</li>
        <li class="list-group-item">3 1/2 teaspoons baking powder</li>
        <li class="list-group-item">1 teaspoon salt</li>
        <li class="list-group-item">1 tablespoon white sugar</li>
        <li class="list-group-item"> 1 1/4 cups milk</li>
        <li class="list-group-item">1 egg</li>
        <li class="list-group-item">3 tablespoons butter, melted</li>
    </ul>
    

    <h1>Posts</h1>
        @foreach($posts as $post)
        @if($post->recipe=="pancakes")
        
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        {{$posts->links()}}
    
@endsection