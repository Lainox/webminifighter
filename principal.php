<?php session_start(); ?>
<?php include('includes/header.php'); ?>  
<body>
<div id="templatemo_wrapper">
  <embed id="flash"  src="images/flash.swf" />
  <?php include('includes/menu1.php'); ?>
    <div id="templatemo_main">
      <div id="home" class="main_box">
     <br>
      <div class="col col_23">
            <br><h1 class="logo">
      <strong>Acceder</strong>
        </h1> <br><br>
      <?php if(isset($_SESSION['user']))
        {
             echo '<div id="bienvenida"><strong>Bienvenido</strong> '.$_SESSION['user']."</div>"; 
             echo '<br><a href="logout.php" id="logout"><strong>Cerrar sesión</strong></a>';
        }
        else
        {
          ?>
          <div id="cuadro">
            <div id="mensaje2"></div>
          <form action="controlador/login.php" method="POST">
            <strong>MF Dioses Login</strong><br><br>
            <label for="">Usuario</label>
            <input type="text" size="15" id="user1" minlength="6" maxlength="10" title="El ID debe tener entre 6-10 letras y numeros." required><br /><br />
            <label for="">Password</label>
            <input type="password" size="15" id="pass1" minlength="6" maxlength="10" title="La contraseña debe de entre 6-10 letras y números." required><br /><br />
            <button id="entrar" style="cursor:pointer;">Entrar</button><br /><br />
             <a href="registrar.php"><strong>Registrate</strong></a>
          </form>
        </div>
          <?php } ?>
        <br>
        <br><br>
       <?php include('includes/menu2.php'); ?>
      

      </div>
            <div class="col col_13 no_margin_right">
             <br><div id="titulo"><img src="images/titulo.png" /></div>
    <div id="img1"><img src="images/img1.jpg" /></div><br><br>
    <div id="img2"><img src="images/img2.jpg" /></div>
    <br>
    <a href="https://www.facebook.com/GMVhost" target="_blank">
    <button id="boton3" style="cursor:pointer;"><strong>GMVHOST SERVIDORES Y VPS</strong></button>
    </a>
    <br><br><br><br><br><br><br><br>
   </div> 
  <?php include('includes/footer.php'); ?>
</div> 
<br><br>   
</body>
</html>