<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica formularios</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <section>
        <img src="images/web.png" id="web">
        
        <h1 id="text">PRÁCTICAS DE <span class="typed"></span> </h1> 
        
        
        
            <a href="#sec" id="btn-neon">

                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>

                IR AL RESULTADO

            </a>
            <a href="practicaformularios.html" id="btn-neon">

                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <span id="span4"></span>

                REGRESAR

            </a>
        
        
    
    </section>
    <center>

    <div class="sec " id="sec">
        <div id="contornoanio">
		 <?php
            $anio=$_POST['anio'];



          if (($anio % 4) && ($anio % 100 || !($anio % 400))) {
	         echo "<h2 id='text2'>NO ES AÑO BISIESTO</h2>";
           
		  }else{
	         echo "<h2 id='text2'>ES AÑO BISIESTO</h2>";
          }
        ?>

		
        
        </div>
        
    </div>
        

</center>
<script src="./js/typed.js"></script>
<script src="./js/main.js"></script>

</body>
</html>




