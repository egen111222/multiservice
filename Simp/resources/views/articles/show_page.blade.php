@extends('layouts.Article')


@section('menu')

               <a class="nav-link active" href="{{route('main_page')}}">Главная</a>
                <a class="nav-link active" href="{{route('Article.create')}}">Создание статей</a>
                <a class="nav-link" href="{{route('logon')}}">Выйти </a>
                
@stop



@section('body')

<p style="margin-top: 20%;"></p>

@foreach ($articles as $article)
    <h2>
    	<a href="{{route('Article.show', ['id' => $article->id ] )}}">{{ $article->title }}</a>  
    	<a href="{{route('Article.edit', ['id' => $article->id ] )}}" style="font-size:0.4em;">редактировать</a>
        <a href="{{route('remove', ['id' => $article->id ] )}}" style="font-size:0.4em;">удалить</a>
    </h2>
    <h4>{{ $article->description }}</h4>
    <hr style="background-color:white"></hr>
    <h5> опубликована  {{$article->created_at}}</h5>
    <h5> обновлена {{$article->updated_at}}</h5>
    <hr style="background-color:white"></hr>

@endforeach


@endsection

