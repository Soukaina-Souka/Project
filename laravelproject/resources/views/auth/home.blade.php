<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search" enctype="mulipart/form-data">
                @csrf
                @method('DELETE')
                <button>

                  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
      >
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path
          fill="currentColor"
          d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
        ></path>
      </svg>
    </div>
  </div>
  <span>Logout</span>
                 </button>
             
                
              </form>
            </div>
          </div>
          
        </nav>

        <div class="container">
      @if( Auth::user()->ville === "rabat")>
          <img src="{{ asset('image/RabatImg.jpg') }}" />
          <h1> {{ Auth::user()->ville }}</h1>
          @endif
          @if( Auth::user()->ville === "casablanca")
          <img src="{{ asset('image/CasaBlancaImg.png') }}" />
          <h1>  {{ Auth::user()->ville }}</h1>
          @endif
          @if( Auth::user()->ville === "fes")
          <img src="{{ asset('image/FesImg.png') }}" />
          <h1>  {{ Auth::user()->ville }}</h1>
          @endif
          @if( Auth::user()->ville === "tanger")
          <img src="{{ asset('image/TangierImg.jpeg') }}" />
          <h1>  {{ Auth::user()->ville }}</h1>
          @endif
          @if( Auth::user()->ville === "agadir")
          <img src="{{ asset('image/AgadirImg.jpeg') }}" />
          <h1>  {{ Auth::user()->ville }}</h1>
          @endif 
            @if( Auth::user()->ville ==="agadir,casablanca,fes,rabat,tanger" )
            <img src="{{ asset('image/TangierImg.jpeg') }}" style="width: 200px; height: 150px;" />  
            <img src="{{ asset('image/FesImg.png') }}" style="width: 200px; height: 150px;" />
            <img src="{{ asset('image/CasaBlancaImg.png') }}" style="width: 200px; height: 150px;" />
            <img src="{{ asset('image/RabatImg.jpg') }}" style="width: 200px; height: 150px;" />
            <img src="{{ asset('image/AgadirImg.jpeg') }}" style="width: 200px; height: 150px;" />
            @endif 




         
        

         

          




          
</div>
</body>
</html>
 


 
