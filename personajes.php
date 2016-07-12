<?php session_start(); ?>
<?php include('includes/header.php'); ?>  
<body>
<div id="templatemo_wrapper">
<embed id="flash"  src="images/flash.swf" />
  <?php include('includes/menu1.php'); ?>
    <div id="templatemo_main">
      <div id="home" class="main_box3">
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
      <div class="col col_13b no_margin_right">
             <div id="titulo"><img src="images/tituperso.png" /></div>
     <br>
    <div id="personaje1">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre : Cro</strong></h2>
      <img src="images/Character1.jpg" />
      </div>
      <br>
      <p id="parrafo1"><strong>
        Cro es más talentoso discípulo del Dr. Shade. Él es un hombre viril y exaltado, que a menudo actúa sin pensar a través de sus acciones. Él es tan impaciente que la gente lo apodaron Fuego. Él confía en sí mismo en lugar de usar las armas.? Compagina su inmensa fuerza física y las artes marciales suaves movimientos para incapacitar a sus oponentes.
      </strong>
      </p>
    <br>
    <div id="personaje2">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Marshal</strong></h2>
      <img src="images/Character2.jpg" />
      </div>
      <br>
      <p id="parrafo1"><strong>
        Marshall es un luchador que vendió su alma al diablo. El brazo mal que él usa siempre está rodeado de espíritus malignos y los combatientes que una vez habían luchado con él se sienten intimidados por ella. Delta-H, un genio del mal que planea dominar el mundo, se está muriendo de explotar su brazo.
      </strong>
      </p>
       <br>
    <div id="personaje3">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Bonny</strong></h2>
      <img src="images/Character3.gif" />
      </div>
      <br>
      <p id="parrafo1"><strong>
       Bonny es el más joven de todos los piratas conocidos. Su personaje es tan libre como un gitano. Su naturaleza activa y mentalidad positiva hace un llamamiento a sus compañeros de corsario y se está impulsado por su sentido de la moda brillante. Ella maneja sus encantos mortales de obligar a sus oponentes. Ella también usa una variedad de armas. Su arma principal es guantes con garras penetrantes.
    </strong>
      </p>
       <br>
    <div id="personaje4">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Kang</strong></h2>
      <img src="images/Character4.gif" />
      </div>
      <br>
      <p id="parrafo1"><strong>
      Kang es el último combatiente de Taekwondo de Corea. Él es cortés con los combatientes de oposición. Pero una vez que comienza la batalla, 
      se convierte en un luchador formidable. 
      Su físico ágil y se mueve ágil él un crackerjack entre combatientes hacen. Él tiene un alto coeficiente intelectual de las artes marciales como él instantáneamente identifica la debilidad de un enemigo y lo ataca con sus poderosas patadas. Kang es lo suficientemente bueno que un partido con su archirrival Cro, uno de los mejores peleadores del Dr. Shade, se convirtió en un punto muerto. Él se niega a tomar partido entre Dr. Shade y Delta-H, optando en su lugar por un terreno neutral.
    </strong>
      </p>
    <br>
    <div id="personaje5">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Hikaru</strong></h2>
      <img src="images/Character5.gif" />
      </div>
      <br>
      <p id="parrafo1"><strong>
     Hikaru es la única hija de una familia samurai japonés. Ella es un cuchillo-portador que usa una daga eléctrico que tiene 20.000 V. Hikaru tiene un increíble repertorio de habilidades de ataque aéreo a causa de su potente salto primavera. Después de su derrota a manos de cyber warrior Xiah, ella no perdió el tiempo y se unió a Delta-M para convertirse en un luchador más fuerte. Desde entonces, se ha convertido en la mano derecha de Delta-M en todas las cosas.
</strong>
      </p>
      <br>
    <div id="personaje6">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Chris</strong></h2>
      <img src="images/Character6.jpg" />
      </div>
      <br>
      <p id="parrafo1"><strong>
     Chris es un luchador de la calle de América. Es un luchador nato que creó su propio estilo de lucha a través de una serie de batallas intensas y salvajes en la arena de la lucha callejera. Él se pasea por el mundo para hacer frente a los maestros de combate y lo establecerá como un nombre muy conocido entre los combatientes.
</strong>
      </p>
      <br>
    <div id="personaje7">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Xiah</strong></h2>
      <img src="images/Character7.gif" />
      </div>
      <br>
      <p id="parrafo1"><strong>
     Esta niña se convirtió en un guerrero cibernético por Delta-M. 
    Afortunadamente, el Dr. Shade ayudó Xiah recuperar su memoria del ser humano, y ahora es un luchador por la justicia! No se equivoque - que posee un poder de ataque inusual que va más allá de la fuerza humana. Ella puede parecer na? Ve pero es un luchador de enormes proporciones que encarna los misteriosos secretos de Delta-M.
     </strong>
      </p>
      <br>
    <div id="personaje8">
      <h2 style="color:black;margin-left:130px;"><strong>Nombre: Goliath</strong></h2>
      <img src="images/Character8.jpg" />
      </div>
      <br>
      <p id="parrafo1"><strong>
     Goliat es el guardaespaldas de Delta-M. 
     Su físico gigantesco se refuerza con atributos mejorados. Él utiliza todo su cuerpo como un arma mortal, y él derribará cualquier peleador como un camión de carga
     </strong>
      </p>  
         </div> 
  </div> 
<br><br>   
<?php include('includes/footer.php'); ?>
</body>
</html>