@extends('layouts.Article')


@section('menu')

               <a class="nav-link active" href="{{route('main_page')}}">Главная</a>
                <a class="nav-link" href="{{route('register')}}">зарегистрироваться</a>
                <a class="nav-link" href="{{route('login')}}">Войти </a>

@stop

 @section('body')

          <div class="inner cover">
            <h1 class="cover-heading">Добро пожаловать в систему добавления постов</h1>
            <p class="lead">желаем удачи</p>
            <p class="lead">
              <a href="{{route('login')}}" class="btn btn-lg btn-secondary">Продолжить</a>
            </p>
          </div>

@stop 

