<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InmoEasy</title>

        <!-- Fonts -->
        <link href="css/bootstrap.css"rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="CSS/efecto.css" type="text/css">

        <link rel="stylesheet" href="CSS/jumbotron.css" type="text/css">
        

       


        


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

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

               
    

  }
        </style>
    </head>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="">
    <img src="images/2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    InmoEasy
    


    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                        

                    @else
                        <a href="{{ route ('login') }}">Login</a>
                        <a href="{{ route ('register') }}">Registro</a>
                        <a href="{{ route ('catalogo') }}">Catálogo</a>
                        <a href="{{ route ('quienesomos') }}">¿Quiénes somos?</a>
                    @endauth
                </div>
            @endif
  </a>
</nav>
    <body>


            <div class="content">
               

                



                <div class="jumbotron">
                
                    <h1 class="display-4">Bienvenido a</h1>
                    <h1 class="display-4">Inmoeasy </h1>
                    
                    <p class="lead">CON NUESTRA ASESORÍA PODRÁS ENCONTRAR EL INMUEBLE IDEAL PARA VIVIR.</p>
                     <hr class="my-4">
                     <p>VENDER, RENTAR, COMPRAR.</p>
                   
                </div> 

               

                <h1>Bienes Raices – Casas y Departamentos en venta y renta</h1>
  <div class="container">
  
</div>


<div class="container">
         <div class="row justify-content-center">
             <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img src="images/cancun.jpg" class="card-img-top" alt="card image cap">
                        </div>
                            <div class="card-body text-center">
                              <h5 class="card-title">Cancún</h5>
                              <p class="card-text">Inmuebles en esta hermosa ciudad turistica. </p>
                               <a href="{{ route ('catalogo') }}"  class="btn btn-primary">ver mas</a>
                              
                            </div>
                    </div>
             </div>
             <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                         <div class="inner">
                             <img src="images/carmen.jpg" class="card-img-top" alt="card image cap">
                         </div>
                            
                            <div class="card-body text-center">
                              <h5 class="card-title">Playa del Carmen</h5>
                              <p class="card-text">Ventas y rentas vacacionales. </p>
                              <a href="{{ route ('catalogo') }}"  class="btn btn-primary">ver mas</a>
                              
                            </div>
                    </div>
             </div>



               
            </div>
<div class="container">

<h4><br/>
En Inmoaesy usted elegirá los Bienes
 Raices más exclusivos de Cancún, Puerto Morelos, Playa del Carmen, Tulum y la Riviera Maya.</h4>

</div>





           
        </div>







        <div class="content">





        
                <div class="title m-b-md">
            
                


         <div class="links">
                    <a href="">facebook @SMARTSOF</a>
                    
                </div>
         
        
    </body>
</html>
