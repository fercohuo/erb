
<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InmoEasy</title>

        <!-- Fonts -->
        

     
        <link href="css/bootstrap.min.css"rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css"rel="stylesheet" type="text/css">

        <link href="css/cata.css"rel="stylesheet" type="text/css">
       
        

        
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

           
        </style>
        
    </head>
    <body>
    
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/welcome') }}">
    <img src="images/2.jpg" width="20" height="20" class="d-inline-block align-top" alt="" >
    InmoEasy


    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route ('login') }}">Login</a>
                        <a href="{{ route ('register') }}">Registro</a>
                        <a href="{{ route ('catalogo') }}">Catalogo</a>
                        <a href="{{ route ('quienesomos') }}">¿Quiénes somos?</a>
                    @endauth
                </div>
            @endif
                        </a>
    </nav>  

<div class="container">
<h1>Catálogo de inmuebles</h1>
<br>
         <div class="row justify-content-center">
         @foreach ($products as $product)
             <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img src="images/{{$product->imagen}}" class="card-img-top" alt="card image cap">
                        </div>
                            <div class="card-body text-center">
                              <h5 class="card-title">{{$product->name}}</h5>
                              <p class="card-text"> <strong>Tipo:<br> </strong> {{$product->tipo}}</p>
                              <p class="card-text"> <strong>Descripción: </strong> <br>{{$product->description}}</p>
                              <p class="card-text"> <strong>Ubicación:<br> </strong> {{$product->ubicacion}}</p>
                              <p class="card-text"> <strong>Operación:<br> </strong> {{$product->operacion}}</p>
                              <p class="card-text"> <strong>Precio:<br> </strong> {{$product->costo}} $</p>

                            
                            </div>
                    </div>
             </div>
             @endforeach
             </div>

        
    </body>
</html>
