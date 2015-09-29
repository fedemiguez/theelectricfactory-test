<?php
session_start();

        $_1jugador_1="";
        $_1jugador_2="";
        $_1jugador_3="";
        $_1jugador_4="";
        $_1jugador_5="";

        $_2jugador_1="";
        $_2jugador_2="";
        $_2jugador_3="";
        $_2jugador_4="";
        $_2jugador_5="";

if(!empty($_GET['id'])){





if(empty($_SESSION['jugada1_1']) && !empty($_GET['id'])){

  $_SESSION['jugada1_1']=$_GET['id'];
  $_1jugador_1=1;


} if(!empty($_SESSION['jugada1_1']) && empty($_SESSION['jugada2_1'])&& $_SESSION['jugada1_1']!=$_GET['id'] ){

  $_SESSION['jugada2_1']=$_GET['id'];
  $_2jugador_1=1;

}if(!empty($_SESSION['jugada2_1']) && empty($_SESSION['jugada1_2']) &&  $_SESSION['jugada2_1']!=$_GET['id'] ){

  $_SESSION['jugada1_2']=$_GET['id'];
  $_1jugador_2=1;


}if(!empty($_SESSION['jugada1_2']) && empty($_SESSION['jugada2_2']) &&  $_SESSION['jugada1_2']!=$_GET['id'] ){

  $_SESSION['jugada2_2']=$_GET['id'];
  $_2jugador_2=1;

}if(!empty($_SESSION['jugada2_2']) && empty($_SESSION['jugada1_3']) &&  $_SESSION['jugada2_2']!=$_GET['id'] ){

  $_SESSION['jugada1_3']=$_GET['id'];
  $_1jugador_3=1;


}if(!empty($_SESSION['jugada1_3']) && empty($_SESSION['jugada2_3']) &&  $_SESSION['jugada1_3']!=$_GET['id'] ){

  $_SESSION['jugada2_3']=$_GET['id'];
  $_2jugador_3=1;

}if(!empty($_SESSION['jugada2_3']) && empty($_SESSION['jugada1_4']) &&  $_SESSION['jugada2_3']!=$_GET['id'] ){

  $_SESSION['jugada1_4']=$_GET['id'];
  $_1jugador_4=1;


}if(!empty($_SESSION['jugada1_4']) && empty($_SESSION['jugada2_4']) &&  $_SESSION['jugada1_4']!=$_GET['id'] ){

  $_SESSION['jugada2_4']=$_GET['id'];
  $_2jugador_4=1;

}if(!empty($_SESSION['jugada2_4']) && empty($_SESSION['jugada1_5']) &&  $_SESSION['jugada2_4']!=$_GET['id'] ){

  $_SESSION['jugada1_5']=$_GET['id'];
  $_1jugador_5=1;

}

}else {

$_SESSION['jugada1_1']="";
$_SESSION['jugada1_2']="";
$_SESSION['jugada1_3']="";
$_SESSION['jugada1_4']="";
$_SESSION['jugada1_5']="";

$_SESSION['jugada2_1']="";
$_SESSION['jugada2_2']="";
$_SESSION['jugada2_3']="";
$_SESSION['jugada2_4']="";


}

if(!empty($_POST['reiniciar'])){

$_SESSION['jugada1_1']="";
$_SESSION['jugada1_2']="";
$_SESSION['jugada1_3']="";
$_SESSION['jugada1_4']="";
$_SESSION['jugada1_5']="";

$_SESSION['jugada2_1']="";
$_SESSION['jugada2_2']="";
$_SESSION['jugada2_3']="";
$_SESSION['jugada2_4']="";

}

$jugador1=$_SESSION['jugada1_1'].$_SESSION['jugada1_2'].$_SESSION['jugada1_3'].$_SESSION['jugada1_4'].$_SESSION['jugada1_5'];
$jugador2=$_SESSION['jugada2_1'].$_SESSION['jugada2_2'].$_SESSION['jugada2_3'].$_SESSION['jugada2_4'];

$pos1 = strpos($jugador1,"1" );
$pos2 = strpos($jugador1,"2" );
$pos3 = strpos($jugador1,"3" );
$pos4 = strpos($jugador1,"4" );
$pos5 = strpos($jugador1,"5" );
$pos6 = strpos($jugador1,"6" );
$pos7 = strpos($jugador1,"7" );
$pos8 = strpos($jugador1,"8" );
$pos9 = strpos($jugador1,"9" );

$pos1_2 = strpos($jugador2,"1" );
$pos2_2 = strpos($jugador2,"2" );
$pos3_2 = strpos($jugador2,"3" );
$pos4_2 = strpos($jugador2,"4" );
$pos5_2 = strpos($jugador2,"5" );
$pos6_2 = strpos($jugador2,"6" );
$pos7_2 = strpos($jugador2,"7" );
$pos8_2 = strpos($jugador2,"8" );
$pos9_2 = strpos($jugador2,"9" );



if($pos1!==false && $pos2!==false && $pos3!==false || $pos4!==false && $pos1!==false && $pos7!==false || $pos3!==false && $pos6!==false && $pos9!==false
|| $pos7!==false && $pos8!==false && $pos9!==false ||  $pos1!==false && $pos5!==false && $pos9!==false || $pos3!==false && $pos5!==false && $pos7!==false
|| $pos2!==false && $pos5!==false && $pos8!==false || $pos4!==false && $pos5!==false && $pos6!==false){?>


<?php
  $ganador=1;

  ?>




<script type='text/javascript'> alert('Gano El jugador X'); </script>


<?php
$_SESSION['jugada1_1']="";
$_SESSION['jugada1_2']="";
$_SESSION['jugada1_3']="";
$_SESSION['jugada1_4']="";
$_SESSION['jugada1_5']="";

$_SESSION['jugada2_1']="";
$_SESSION['jugada2_2']="";
$_SESSION['jugada2_3']="";
$_SESSION['jugada2_4']="";

}elseif($pos1_2!==false && $pos2_2!==false && $pos3_2!==false || $pos4_2!==false && $pos1_2!==false && $pos7_2!==false || $pos3_2!==false && $pos6_2!==false && $pos9_2!==false
|| $pos7_2!==false && $pos8_2!==false && $pos9_2!==false ||  $pos1_2!==false && $pos5_2!==false && $pos9_2!==false || $pos3_2!==false && $pos5_2!==false && $pos7_2!==false
|| $pos2_2!==false && $pos5_2!==false && $pos8_2!==false || $pos4_2!==false && $pos5_2!==false && $pos6_2!==false){?>

<?php
  $ganador=2;?>

  <script type='text/javascript'> alert('Gano El jugador O'); </script>


  <?php
  $_SESSION['jugada1_1']="";
  $_SESSION['jugada1_2']="";
  $_SESSION['jugada1_3']="";
  $_SESSION['jugada1_4']="";
  $_SESSION['jugada1_5']="";

  $_SESSION['jugada2_1']="";
  $_SESSION['jugada2_2']="";
  $_SESSION['jugada2_3']="";
  $_SESSION['jugada2_4']="";

}elseif(empty($ganador)&&!empty($_SESSION['jugada1_5'])){?>

  <script type='text/javascript'> alert('Empate'); </script>


  <?php
  $_SESSION['jugada1_1']="";
  $_SESSION['jugada1_2']="";
  $_SESSION['jugada1_3']="";
  $_SESSION['jugada1_4']="";
  $_SESSION['jugada1_5']="";

  $_SESSION['jugada2_1']="";
  $_SESSION['jugada2_2']="";
  $_SESSION['jugada2_3']="";
  $_SESSION['jugada2_4']="";

}
?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Ta-Te-Ti</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<link href="estilo.css" rel="stylesheet">


</head>

<body>


<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap">
  <h1> Juga al Ta-Te-Ti </h1>


  <header>

<div class="col-lg-12">

  <ul class="cuadrado"  >

       <a href="tateti.php?id=1" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==1||($_SESSION['jugada1_2']==1)||($_SESSION['jugada1_3']==1) ||($_SESSION['jugada1_4']==1) ||($_SESSION['jugada1_5']==1)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==1)||($_SESSION['jugada2_2']==1)||($_SESSION['jugada2_3']==1)||($_SESSION['jugada2_4']==1)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=1||$_SESSION['jugada1_2']!=1||$_SESSION['jugada1_3']!=1||$_SESSION['jugada2_1']!=1||$_SESSION['jugada2_2']!=1||$_SESSION['jugada2_3']!=1||$_SESSION['jugada1_4']!=1 ||$_SESSION['jugada2_4']!=1 ||$_SESSION['jugada1_5']!=1) {echo"espera";}

       ?>" id="1" >  </li> </a>



       <a href="tateti.php?id=2" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==2||($_SESSION['jugada1_2']==2)||($_SESSION['jugada1_3']==2)||($_SESSION['jugada1_4']==2)||($_SESSION['jugada1_5']==2)){echo "cruz";}

        elseif($_SESSION['jugada2_1']==2||($_SESSION['jugada2_2']==2)||($_SESSION['jugada2_3']==2)||($_SESSION['jugada2_4']==2)){echo "circulo";}

       elseif ($_SESSION['jugada1_1']!=2||$_SESSION['jugada1_2']!=2||$_SESSION['jugada1_3']!=2||$_SESSION['jugada2_1']!=2||$_SESSION['jugada2_2']!=2||$_SESSION['jugada2_3']!=2||$_SESSION['jugada2_4']!=2||$_SESSION['jugada1_4']!=2||$_SESSION['jugada1_5']!=2) {echo"espera";}

       ?>" id="2" >  </li> </a>



       <a href="tateti.php?id=3" onclick="function()">

      <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==3||($_SESSION['jugada1_2']==3)||($_SESSION['jugada1_3']==3)||($_SESSION['jugada1_4']==3)||($_SESSION['jugada1_5']==3)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==3)||($_SESSION['jugada2_2']==3)||($_SESSION['jugada2_3']==3)||($_SESSION['jugada2_4']==3)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=3||$_SESSION['jugada1_2']!=3||$_SESSION['jugada1_3']!=3||$_SESSION['jugada2_1']!=3||$_SESSION['jugada2_2']!=3||$_SESSION['jugada2_3']!=3 ||$_SESSION['jugada2_4']!=3||$_SESSION['jugada1_4']!=3||$_SESSION['jugada1_5']!=3) {echo"espera";}

        ?>" id="3" >  </li> </a>



       <a href="tateti.php?id=4" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==4||($_SESSION['jugada1_2']==4)||($_SESSION['jugada1_3']==4) |($_SESSION['jugada1_4']==4) |($_SESSION['jugada1_5']==4)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==4)||($_SESSION['jugada2_2']==4)||($_SESSION['jugada2_3']==4) ||($_SESSION['jugada2_4']==4)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=4||$_SESSION['jugada1_2']!=4||$_SESSION['jugada1_3']!=4||$_SESSION['jugada2_1']!=4||$_SESSION['jugada2_2']!=4||$_SESSION['jugada2_3']!=4 ||$_SESSION['jugada2_4']!=4 ||$_SESSION['jugada1_4']!=4 ||$_SESSION['jugada1_5']!=4 ) {echo"espera";}

       ?>" id="4" >  </li> </a>


       <a href="tateti.php?id=5" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==5||($_SESSION['jugada1_2']==5)||($_SESSION['jugada1_3']==5) ||($_SESSION['jugada1_4']==5) ||($_SESSION['jugada1_5']==5)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==5)||($_SESSION['jugada2_2']==5)||($_SESSION['jugada2_3']==5)||($_SESSION['jugada2_4']==5)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=5||$_SESSION['jugada1_2']!=5||$_SESSION['jugada1_3']!=5||$_SESSION['jugada2_1']!=5||$_SESSION['jugada2_2']!=5||$_SESSION['jugada2_3']!=5||$_SESSION['jugada2_4']!=5 ||$_SESSION['jugada1_4']!=5 ||$_SESSION['jugada1_5']!=5) {echo"espera";}

       ?>" id="5" >  </li> </a>
       <a href="tateti.php?id=6" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==6||($_SESSION['jugada1_2']==6)||($_SESSION['jugada1_3']==6) ||($_SESSION['jugada1_4']==6) ||($_SESSION['jugada1_5']==6) ){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==6)||($_SESSION['jugada2_2']==6)||($_SESSION['jugada2_3']==6) ||($_SESSION['jugada2_4']==6)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=6||$_SESSION['jugada1_2']!=6||$_SESSION['jugada1_3']!=6||$_SESSION['jugada2_1']!=6||$_SESSION['jugada2_2']!=6||$_SESSION['jugada2_3']!=6 ||$_SESSION['jugada2_4']!=6 ||$_SESSION['jugada1_4']!=6 ||$_SESSION['jugada1_5']!=6) {echo"espera";}

       ?>" id="6" >  </li> </a>
       <a href="tateti.php?id=7" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==7||($_SESSION['jugada1_2']==7)||($_SESSION['jugada1_3']==7)||($_SESSION['jugada1_4']==7) ||($_SESSION['jugada1_5']==7)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==7)||($_SESSION['jugada2_2']==7)||($_SESSION['jugada2_3']==7) ||($_SESSION['jugada2_4']==7)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=7||$_SESSION['jugada1_2']!=7||$_SESSION['jugada1_3']!=7||$_SESSION['jugada2_1']!=7||$_SESSION['jugada2_2']!=7||$_SESSION['jugada2_3']!=7||$_SESSION['jugada2_4']!=7||$_SESSION['jugada1_4']!=7 ||$_SESSION['jugada1_5']!=7) {echo"espera";}

       ?>" id="7" >  </li> </a>
       <a href="tateti.php?id=8" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==8||($_SESSION['jugada1_2']==8)||($_SESSION['jugada1_3']==8)||($_SESSION['jugada1_4']==8)||($_SESSION['jugada1_5']==8)){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==8)||($_SESSION['jugada2_2']==8)||($_SESSION['jugada2_3']==8)||($_SESSION['jugada2_4']==8)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=8||$_SESSION['jugada1_2']!=8||$_SESSION['jugada1_3']!=8||$_SESSION['jugada2_1']!=8||$_SESSION['jugada2_2']!=8||$_SESSION['jugada2_3']!=8 ||$_SESSION['jugada2_4']!=8||$_SESSION['jugada1_4']!=8||$_SESSION['jugada1_5']!=8) {echo"espera";}

       ?>" id="8" >  </li> </a>
       <a href="tateti.php?id=9" onclick="function()"> <li class="col-lg-4 col-xs-2 <?php if($_SESSION['jugada1_1']==9||$_SESSION['jugada1_2']==9||$_SESSION['jugada1_3']==9||$_SESSION['jugada1_4']==9||$_SESSION['jugada1_5']==9){echo "cruz";}

       elseif(($_SESSION['jugada2_1']==9)||($_SESSION['jugada2_2']==9)||($_SESSION['jugada2_3']==9)||($_SESSION['jugada2_4']==9)){echo"circulo";}

       elseif ($_SESSION['jugada1_1']!=9||$_SESSION['jugada1_2']!=9||$_SESSION['jugada1_3']!=9||$_SESSION['jugada2_1']!=9||$_SESSION['jugada2_2']!=9||$_SESSION['jugada2_3']!=9 ||$_SESSION['jugada2_4']!=9||$_SESSION['jugada1_4']!=9||$_SESSION['jugada1_5']!=9  ) {echo"espera";}

       ?>" id="9" >  </li> </a>

  </ul>

<div class="col-lg-12 center-block">
  <form action="" method="post">

    <input type="submit" value="Reiniciar" class="smoothScroll btn btn-lg " name="reiniciar">

    <?php $suma1=$_1jugador_1+$_1jugador_2+$_1jugador_3+$_1jugador_4+$_1jugador_5;
    echo $suma1 ?>

  <form>
</div>
</header>
</div>

</div>

<!-- /headerwrap -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php if($suma1==0||$suma1%2==0){?>
  <script type="text/javascript">

  $(function() {
  $('.espera').click(function() {
  $(this).css('background-image', 'url(img/x.jpg)');
  });
  })
  </script>

  <?php }else{?>

    <script type="text/javascript">

    $(function() {
    $('.espera').click(function() {
    $(this).css('background-image', 'url(img/circulo.jpg)');
    });
    })
    </script>

    <?php 


    }?>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
