<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ckeditor5-build-classic/ckeditor.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row" style="background: #d0d2d3;" >
		<div class="col-md-2">
			<a href="{{route('admin')}}" style="color: black;">Главная</a>
		</div>
		<div class="col-md-2">
			<a href="{{route('adminnews')}}" style="color: black;">Новости</a>
		</div>
        <div class="col-md-2">
           <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                Выйти
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
	</div>
    @if(count($errors) > 0)
        <ul>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                
                <li> {{ $error }} </li>
            @endforeach 
            </div>
        </ul>
    @endif
    
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
@endif
	@yield('content')
</div>

</body>
</html>