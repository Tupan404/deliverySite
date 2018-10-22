<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="https://png.icons8.com/metro/1600/delivery.png">
    <title>Comprar Produtos</title>

  <style>
        .barra{
    background-color: #E2CC6B;
    top: -40px;
    left: auto;
    right: auto ;
    height: 30px;
}
    img.usuario{
        position:absolute;
    margin-top: auto;
    margin-left:auto;
    margin-right:auto;
   

}

    img.logo{
        position:absolute;
    margin-top: -460px;
    margin-left:550px;
    margin-right:auto;
   
    }

    .carrinho{
        position:absolute;
    margin-top: -160px; 
    margin-left:1100px;
    margin-right:0;
    }

     .icon{
        position:absolute;
    margin-top: -380px;
    margin-left:1120px;
    margin-right:0;
}

    .cabecalho{
        position:absolute;

    margin-top:0px; 
    margin-left:0px;
    margin-right:0px;
    opacity:.6;
    background-color: #000;
    width: 1300px;
    height: 100px;  
    }

/* baraa do menu */

    .barrali{
        opacity: .8;
    }
    .menu{
        position:absolute;
        margin-top: -380px;
        margin-left:12px;
        width:1300px;
        
    }

    ul{
       
        margin:0px;
        padding: 0px;
        list-style: none;
       background-size:cover;
       
    }

    ul li {
        float: left;
        width: 213px; 
        height: 40px;
        background-color: #000;
        opacity: .8;
        line-height: 40px;
        text-align: center;  
        font-size: 20px;
        color: #E2CC6B;
        /* margin: 2px; */
    }

    ul li a{
        text-decoration: none;
        color:white;
        display: block; 
           
    }

    ul li a:hover {
        background-color: #00a2d5;
    }

    ul li ul li{
        display: none;
        width: 500px;
        height: 50px;
    }

    ul li:hover ul li{
        display: block;
    }

    #divBusca{
        position:absolute;
        margin-top: -550px;
        margin-left:450px;
        width:1300px;
        opacity: .8;
        background-color:#000;
        border:solid 2px #E2CC6B;
        border-radius:10px;
        width:500px;
        height:60px;
}
 
#txtBusca{
  float:left;
  background-color:transparent;
  margin-top:12px;
  padding-left:15px; 
  font-size:20px;
  border:none;
  height:38px;
  width:440px;
  color: #fff;
}
 
#btnBusca{
  margin-top:10px;
  height:40px;
  border-radius:0 7px 7px 0;
  width:50px;
  background:#00a2d5;
}
 
#divBusca img{
  float:right;
}


    </style>

  </head>
  <body>
  
 
    <div class="barra">
    
    <a href="index.php" style="margin-left:1250px;"> Sobre </a>  
    <a href="usuario.php"> <img src="https://openclipart.org/download/247319/abstract-user-flat-3.svg" class="float-right" width="20" height="20" style="margin-top:15px;margin:5px;" > </a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    </div>
  
    <div class="container-fluid" style="background-color:#fff;">
        <div class="row">
            <div class="col-12">
                


            <div>
        </div> 
    </div>   



  <div class="container-fluid" style="background-color:#fff;">
    <div class="row">
        <div class="col-12">
      
            <div class="col-10">
            
                <div class="cabecalho">  </div>
                
                    <img src="fundoof.jpg" width="1300" height="400">
                    <img src="logo.png" class="logo">
                
                    <img src="cart.png" class="icon" width="50" height="50">

                    
            </div>
           
            <div class="container-fluid" style="background-color:#fff;" width="1300">
        <div class="row"><br>
            <div class="col-12"> 

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slide1.png" alt="First slide" >
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="slide2.png" alt="Second slide" >
    </div> -->
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
    </div> <br>
</div>

<form>
<div id="divBusca">
  
  <button id="btnBusca"> <img src="busca.png" alt="Buscar..."/> </button>
  <input type="text" id="txtBusca" placeholder="Buscar..."/>
  
</div>

</form>

 <div class="menu">   
                <ul>
                    <li><a> Categoria </a>
                        <ul>
                            <li><a href="#" >Bebidas</a></li>
                            <li><a href="#">Hortifruti</a></li>
                            <li><a href="#">Higiene e Beleza</a></li>
                            <li><a href="#">Carne, Peixes e Aves</a></li>
                            <li><a href="#">Alimentos Basicos</a></li>
                        </ul>
                    </li>

                    <li><a> Bebidas </a>
                         <ul>
                            <li><a>Arroz</a></li>
                            <li><a>Feijão</a></li>
                            <li><a>Macarão</a></li>
                        </ul>
                    </li>

                    <li><a> Hortifruti </a>
                         <ul>
                            <li><a>Arroz</a></li>
                            <li><a>Feijão</a></li>
                            <li><a>Macarão</a></li>
                        </ul>
                    </li>
                    
                    <li><a> Higiene e Beleza </a>
                         <ul>
                            <li><a>Arroz</a></li>
                            <li><a>Feijão</a></li>
                            <li><a>Macarão</a></li>
                        </ul>
                    </li>
                    
                    <li><a> Carne, Peixes e Aves </a>
                         <ul>
                            <li><a>Arroz</a></li>
                            <li><a>Feijão</a></li>
                            <li><a>Macarão</a></li>
                        </ul>
                    </li>

                    <li><a> Alimentos Básicos</a>
                         <ul>
                            <li><a>Arroz</a></li>
                            <li><a>Feijão</a></li>
                            <li><a>Macarão</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

            </div>                            
         </div>
    </div>                            
<>
 
                    
           

<div class="container-fluid" style="background-color:#fff;">
                        <div class="row"><br>
                            <div class="col-12"> <br>
                                <h3 class="text-secondary display-4"> Bebidas </h3>

                                <div class="row">
                                                               
                                  <div class="col-3 text-center ">
                                    <div class="card mb-4 shadow-sm">
                                      <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Coca Cola</h4>
                                     </div>
                                     <div class="card-body">
                                        <img  src="https://purepng.com/public/uploads/large/purepng.com-coca-cola-cancoca-colacokecarbonated-soft-drinksoft-drinkcoke-can-1411527233281vvsqo.png" width="50" height="100" >
                                          <p class="lead"> Coca Cola 250ml </p>
                                        <h3 class="card-title pricing-card-title">2,99 R$</h3>
                                        <div class="row offset-2">
                                        <button type="button" class="btn btn-outline-info img-circle">-</button>
                                         <input type="text" class="form-contro text-center" style="width:100px;"> <br>
                                        <button type="button" class="btn btn-outline-info btn badge badge-pill img-circle">+</button>
                                          </div> <br>
                                          <button type="button" class="btn btn-outline-info" style="width:260px;">Adicionar</button>
                                      </div>
                                    </div>

                                 </div>

                                </div>
                            </div>
                        </div>
                      </div>

<!-- <div class="container-fluid">   
    
      <div class="barra"> 
              <div class="btn-group dropright">
                 <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Bebidas
               </button>
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </div>
          </div>
      
    </div>

</div> -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script> 
	


  </body>
</html>