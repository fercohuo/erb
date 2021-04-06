<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InmoEasy</title>

        <!-- Fonts -->
        <link href="css/bootstrap.css"rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

           

            .content {
                text-align: center;
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
        </style>
    </head>
    <body>
    
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/welcome') }}">
    <img src="images/2.jpg" width="30" height="30" class="d-inline-block align-top" alt="" >
    InmoEasy


    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                        

                    @else
                        <a href="{{ route ('login') }}">Login</a>
                        <a href="{{ route ('register') }}">Registro</a>
                        <a href="{{ route ('catalogo') }}">Catalogo</a>
                        <a href="{{ route ('quienesomos') }}">¿Quienes somos?</a>
                    @endauth
                </div>
            @endif
  </a>
</nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/56.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/13.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
             
            </div>

            
        </div>

        <div class="content">
                <div class="title m-b-md">
                
                   

<div class="container">

         <div class="row justify-content-center">
         <h1>¿Quiénes Somos?</h1>
                        <h5>En Inmoeasy deseamos que usted pueda elegir los Desarrollos
                         Inmobiliarios más Exclusivos y las Mejores Propiedades Privadas en las Ciudades de Cancún, Puerto
                         Morelos, Playa del Carmen, Tulúm, y en toda la Riviera Maya del Estado de Quintana Roo México.</h5>


                         <h1>Misión</h1>
                                    
                <h5>
Brindar un servicio de asesoría inmobiliaria personalizada orientada a cuidar el patrimonio de nuestros clientes, con ética y profesionalismo, proporcionando a nuestros clientes asesoría inmobiliaria personalizada e integral, con ética, honestidad y
 discreción, siempre orientados al servicio personalizado en todas las etapas de nuestra intervención en la venta, compra o alquiler, basados en nuestra experiencia y capacitación en el sector.
</h5>
<h2>Visión</h2>
<h5>
Ser la mejor alternativa para quienes quieren la ayuda de un profesional 
inmobiliario, desde una relación cercana y resolutiva, ofreciendo las propuestas más innovadoras. Que nuestros clientes se sientan plenamente acompañados y asesorados durante todo el proceso de compra de una propiedad, para mejorar su calidad de vida.</h5>
</div>

            

            

</div>



<div class="links">

<div class="row justify-content-center">

    <div class="col-md-4">
           <div class="card shadow" style="width: 10rem;">
               <div class="inner">
                   <img src="./images/fer.png" class="card-img-top" alt="card image cap">
               </div>
                   <div class="card-body text-center">
                     <h5 class="card-title">Fernando Cohuo</h5>
                     <p class="card-text">fernando@hotmail.com</p>
                     <p class="card-text">Num:9988445658</p>
                     

                   
                   </div>
           </div>
    </div>
    <div class="col-md-4">
           <div class="card shadow" style="width: 10rem;">
               <div class="inner">
                   <img src="./images/fer.png" class="card-img-top" alt="card image cap">
               </div>
                   <div class="card-body text-center">
                     <h5 class="card-title">Kevin reyes</h5>
                     <p class="card-text">Kevin@hotmail.com</p>
                     <p class="card-text">Num:9988445658</p>
                     

                   
                   </div>
           </div>
    </div>

         <div class="links">
         
                    <a href=""> <br>facebook @SMARTSOF</a>
                    
                </div>
         
        
    </body>
</html>
