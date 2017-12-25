<!DOCTYPE html lang="{{config('app.locale')}}">
<html>
<head>
  <meta charset="utf-8">
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>


<body>


<link rel="stylesheet" type="text/css" href="{{asset('/assets/main_page/cover.css')}}">

 <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"> <a href="{{route('main_page')}}">Article</a></h3>
              <nav class="nav nav-masthead">
                  @yield('menu')
              </nav>
            </div>
          </div>

              @yield('body')

        </div>

      </div>

    </div>





</body>

</html>