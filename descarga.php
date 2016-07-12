<?php session_start(); ?>
<?php include('includes/header.php'); ?>  
<body>
<div id="templatemo_wrapper">
 <embed id="flash"  src="images/flash.swf" />
  <?php include('includes/menu1.php'); ?>
    <div id="templatemo_main">
      <div id="home" class="main_box6">
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
        {     ?>
          <div id="cuadro">
            <div id="mensaje2"></div>
         <form action="controlador/login.php" method="POST">
            <strong>MF Dioses Login</strong><br><br>
            <label for="">Usuario</label>
            <input type="text" size="15" id="user1" minlength="6" maxlength="10" title="El ID debe tener entre 6-10 letras y numeros." required><br /><br />
            <label for="">Password</label>
            <input type="password" size="15" id="pass1" minlength="6" maxlength="10" title="El ID debe tener entre 6-10 letras y numeros." required><br /><br />
            <button id="entrar" style="cursor:pointer;">Entrar</button><br /><br />
             <a href="registrar.php"><strong>Registrate</strong></a>
          </form>
        </div>
        <?php } ?>
        <br>
        <br><br>
        <?php include('includes/menu2.php'); ?> <br><br>
    
    </div>
    <div class="col col_13e no_margin_right">
      <div id="descarga"><img src="images/bgmf01.jpg" /></div><br><br><br><br>
<a href="https://mega.nz/#!JwECCIZJ!dPG57v9GB1KGJsunQBJO3Qf3jxxAqHW_7-2BbdZKciA" target="_blank"><button id="boton1" style="cursor:pointer;"><strong>Descargar cliente MF Dioses</strong></button></a>
    <a href="https://www.sendspace.com/file/9qshcw" target="_blank">
    <button id="boton2" style="cursor:pointer;"><strong>Descargar logo de clanes</strong></button>
    </a></div> </div> 
  <?php include('includes/footer.php'); ?>
</div> 
<br><br>   
</body>
</html>