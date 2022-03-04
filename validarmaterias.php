
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
        <div id="contornomaterias">
        <?php
$matematicas=$_POST['matematicas'];
$programacion=$_POST['programacion'];
$economia=$_POST['economia'];
$basededatos=$_POST['basededatos'];
$contabilidad=$_POST['contabilidad'];

$promedio=($matematicas+$programacion+$economia+$basededatos+$contabilidad)/5;


if ($promedio >= 90) {

    echo "<h2 id='text2'>Tu promedio es $promedio , Eres buen alumno.</h2>";
    
    } else if ($promedio<90 && $promedio>=80) {
    
        echo "<h2 id='text2'>Tu promedio es $promedio , Vas bien pero debes mejorar.</h2>";
    
    } else if ($promedio>=70 && $promedio<80) {
    
        echo "<h2 id='text2'>Tu promedio es $promedio , Estas aprobando de panzazo.</h2>";
    
    } else if ($promedio<70 ) {
    
        echo "<h2 id='text2'>Tu promedio es $promedio , Ya fuiste...</h2>";
    
    }

    

?>

        </div>
        
    </div>
        

</center>
<script src="./js/typed.js"></script>
<script src="./js/main.js"></script>

</body>
</html>



