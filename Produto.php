<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="https://png.icons8.com/metro/1600/delivery.png">
    <title>Comprar Produtos</title>

  <style>
        .barra{
    background-color: #00a2d5;
    position: fidex;
    top: -60px;
    left: auto;
    right: auto ;
    height: 65px;
}
    img.usuario{
        position:absolute;
    margin-top: auto;
    margin-left:auto;
    margin-right:auto;
   

}

    img.logo{
        position:absolute;
    margin-top: -250px;
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
    margin-top: -120px;
    margin-left:1120px;
    margin-right:0;
}


	    .nav{
	    	padding: 10px 0px;
	    	background: #37f;
	    	text-align: center;
	    }

         .main-menu>li{
         	display: inline-block;
         	width: 150px;
         	padding: 10px 0px;
         	margin-left: 10px;
         	text-align: center;
         	color: white;
         	font-size: 20px;
         	border-left: 1px solid white;
         	transition: .4s;
         	cursor: pointer;
         	box-sizing: border-box;

         }
         
         .main-menu li:hover .sub-menu{
              display: block;
         }
 
         .sub-menu{
         	display: none;
         	position: absolute;
         	padding: 0px;
         	margin-top: 30px;
         	margin-left: -10px;	
         	float: left;
         	width: 300px; 
         	text-align: left;
         	box-sizing: border-box;
         	border: 5px solid white;
         	box-shadow: 1px 1px 1px grey;
         	
       
         }

         .sub-menu:before{
                 content:"";
                 width: 0px;
                 height:0px;
                 border-left:20px solid transparent;
                 border-right:20px solid transparent;
                 border-bottom:30px solid white;
                 position: absolute;
                 margin:-30px 0px 0px 60px;
         }

         .sub-menu li{
         	list-style-type: none;
         	padding: 10px;
         	color: white;
         	font-size: 20px;
         	background: #37f;
         }
     .main-menu>li:hover, .sub-menu>li:hover{
         	background: #35c;
         }


}


    </style>

  </head>
  <body>
    
  <div class="container-fluid" style="background-color:#fff;">
    <div class="row">
        <div class="col-12">

            <div class="col-10">

                <img src="alimento2.jpg" width="1300" height="300">
                <img src="logo.png" class="logo" alt="Responsive image">

                <button type="button" class="carrinho btn badge badge-pill badge-light">Meu Carrinho </button>
                <img src="http://www.youthhorizons.org/wp-content/uploads/2017/02/cart-138x150.png" class="icon" width="80"
                    height="80">

            </div>

        </div>
    </div>
</div>

<div class="nav">
		<ul class="main-menu">
		
			<li>Course

			   <ul class="sub-menu">
               	<li>HTML</li>
               	<li>CSS</li>
               	<li>JAVASCRIPT</li>
               	<li>JQUERY</li>
               	<li>BOOTSTRAP</li>
               </ul>

            </li>
  </ul>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>