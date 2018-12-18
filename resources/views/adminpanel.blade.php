<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <title >Control Panel</title>


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     
        <link href="{{ asset('css/fieldset.css') }}" rel="stylesheet"> 
     
</head>
<body>
    <div id="app">

        <nav class="navbar has-shadow bg-dark">
            <div class="container">
               <div class="nav-right"> 
              <a class="nav-item" href="{{route('home') }} ">
                <img src="#" alt="DevMarketer Logo" />
            </a>
           
       </div>
      
       <div class="nav-right " style="overflow: visible; ">
         @if (!Auth::guest())
         
         <button class="nav-item dropdown bg-light">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left: 50px;">
          
           <img src="uploads/avatars/{{ auth()->user()->avatar }} " style="width:32px; height:32px; position:absolute; top:5px; bottom:5px; left:10px; border-radius: 50%"> {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profile">Profile</a>
          <a class="dropdown-item" href="/manage">Manage</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>

        </div>
              </button><!-- 
                 <button class="dropdown is-aligned-right nav-item is-tab">
                          Hey Wilfried <span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Settings</a></li>
                    <li class="Separator"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
                          </button> --> 
         @else
<a href="#" class="nav-item is-tab">Login</a>
         <a href="#" class="nav-item is-tab">Join the Community</a>
         @endif


       </div>
   </div>
</nav>
<div class="container-fluid">
@if($flash = session('message'))
      <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
      </div>
      @endif
  
    <div class="row">
    
       @include('partials.side-manage')
    
    <div class="row">
 @yield('content')
</div>
       
         <!-- <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                 
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
                 </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
                 </nav>
                 
            </div> -->
         
    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script> 
      <script src="{{ asset('js/bootstrap.js') }}"></script> 

  <script>
export default {
  data () {
    return {
      status: 'not_accepted'
    }
  }
}
</script>
     
</body>
</html>


 

