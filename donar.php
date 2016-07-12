<?php session_start(); ?>
<?php include('includes/header.php'); ?>  
<body>
<div id="templatemo_wrapper">
<embed id="flash"  src="images/flash.swf" />
  <?php include('includes/menu1.php'); ?>
    <div id="templatemo_main">
      <div id="home" class="main_box4">
         <br>
    <div class="col col_23">
             <h1 class="logo">
      <strong>Acceder</strong>
    </h1><br>
     <?php if(isset($_SESSION['user']))
        {
             echo '<div id="bienvenida"><strong>Bienvenido</strong> '.$_SESSION['user']."</div>"; 
             echo '<br><a href="logout.php" id="logout"><strong>Cerrar sesión</strong></a>';
        }
        else
        {       ?>
          <div id="cuadro">
            <div id="mensaje2"></div>
         <form action="controlador/login.php" method="POST">
            <strong>MF Dioses Login</strong><br><br>
            <label for="">Usuario</label>
            <input type="text" size="15" id="principal" minlength="6" maxlength="10" title="El ID debe tener entre 6-10 letras y numeros." required><br /><br />
            <label for="">Password</label>
            <input type="password" size="15" id="principal" minlength="6" maxlength="10" title="El ID debe tener entre 6-10 letras y numeros." required><br /><br />
            <button id="entrar" style="cursor:pointer;">Entrar</button><br /><br />
             <a href="registrar.php"><strong>Registrate</strong></a>
          </form>
        </div>
          <?php } ?>
        <br>
        <br><br>
        <?php include('includes/menu2.php'); ?> <br><br>
   
    </div>
      <div class="col col_13c no_margin_right">
          <div id="donaciones"><img src="images/titudonaciones.png" /></div>
    <article class="group">
<center>
 <br><br>
<div id="paypal"><img src="images/PayPal-logo.png" /></div>
<br>
<div class="separator" style="clear: both; text-align: center;">
 <tr><td>
        <img src="images/BBBBB.png" style="border-width: 0px; border-style: solid; width: 320px; height: 154px;" /></b></td><br /><br />

      <td><b style="text-align: center;"><img border="0" height="154" src="images/CCCCCCCC.jpg" width="320" /></b></td>
    </tr>
<br><br><br>
</div>
<div class="separator" style="clear: both; text-align: center;"><a href="https://www.facebook.com/jarlen.ranillatrujillano" target="_blank">
  <img src="http://3.bp.blogspot.com/-eWpeBUoqpHE/VrLHA4Ayi6I/AAAAAAAAA2Y/pY-eJuytXnw/s1600/CHAT.jpg" /></a></div>
  <br><br>
<span style="color:#FF0000;"><span style="font-size:22px;"><b>Administrador General Online</b></span></span>
</center>
</article></div></div> 
  <?php include('includes/footer.php'); ?>
</div> <br><br>   
</body>
</html>