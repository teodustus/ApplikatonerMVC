@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>MeatBalls</h1>
    <img src="/images/bollar.jpg" style="height: 300px; width: auto;">
    <h2>Ingredients:</h2>
    <ul class="list-group list-group-flush jumbotron">
     <li class="list-group-item"> 2 tablespoons olive oil</li>
     <li class="list-group-item">1 onion, diced</li>
     <li class="list-group-item">1 pound ground beef</li>
     <li class="list-group-item">1 pound ground pork</li>
     <li class="list-group-item">1/2 cup Panko</li>
     <li class="list-group-item">2 large egg yolks</li>
     <li class="list-group-item">1/4 teaspoon ground allspice</li>
     <li class="list-group-item">1/4 teaspoon ground nutmeg</li>
     <li class="list-group-item">Kosher salt and freshly ground black pepper, to taste</li>
    </ul>
    

    <h1>Posts</h1>
        @foreach($posts as $post)
        @if($post->recipe=="meatballs")
        
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