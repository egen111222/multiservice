@extends('layouts.Article')



@section('menu')

               <a class="nav-link active" href="{{route('main_page')}}">Главная</a>
                <a class="nav-link active" href="#">Просмотр статей</a>
                <a class="nav-link" href="{{route('logon')}}">Выйти </a>
@stop



@section('body')




<form method="post" action="{{route('Article.store')}}">
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Заголовок статьи</label>
    <input type="text" class="form-control" required="required" id="formGroupExampleInput" name="title">
  </div>
   @if($errors->has('title')) 
      <h4>{{ $errors->first('title') }}</h4>
   @endif
  {{ csrf_field() }}
    <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Краткое описание статьи</label>
    <input type="text" class="form-control" required="required" id="formGroupExampleInput" name="description">
  </div>
    @if($errors->has('title')) 
      <h4>{{ $errors->first('description') }}</h4>
    @endif
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput2">Текст Статьи</label>
    <textarea class="form-control" name="body" required="required" id="formGroupExampleInput2"></textarea>
  </div>
      @if($errors->has('body')) 
      <h4>{{ $errors->first('body') }}</h4>
    @endif
  <button class="btn" style="color:grey">Создать статью</button>
</form>




@endsection
