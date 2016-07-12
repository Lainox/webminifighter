//login
$(document).ready(function(){
	$("#entrar").click(function(event){
		event.preventDefault();
		var user = $("#user1").val();
		var pass = $("#pass1").val();
		$("#user1").val("");
		$("#pass1").val("");
		if(user != '' || pass != '' )
		{
			$.ajax({
				url: 'controlador/login.php',
				type: 'POST',
				cache:false,
				data:{user:user, pass:pass},
				success: function(msg) {

				if(msg=='1') {
				
					$("#mensaje2").html("<strong>Datos correctos.</strong>").css("color","red");
					window.location = "principal.php";

				} 
				else if(msg=='2') {
					$("#mensaje2").html("<strong>Datos incorrectos</strong>").css("color","red");
				}
				
				 
				}
			});
		} else {
			$("#mensaje2").html("<strong>Debe completar todos los campos</strong>").css("color","red");
		}
	});
});

$(document).ready(function(){
	$("#registro").click(function(event){
		event.preventDefault();
		var user = $("#user").val();
		var pass = $("#pass").val();
		$("#user").val("");
		$("#pass").val("");
		if(user != '' || pass != '' )
		{
			$.ajax({
				url: 'controlador/registro.php',
				type: 'POST',
				cache:false,
				data:{user:user, pass:pass},
				success: function(msg) {

				if(msg=='1') {
				  
					$("#formreg").html("<strong>Cuenta creada con éxito. <br>Ahora puede loguearse.</strong>").css("color","red");
					window.location = "principal.php";

				} 
				else if(msg=='2') {
					$("#mensaje").html("<strong>El nombre de usuario debe ser entre 6 y 10 caracteres</strong>").css("color","red");
				}
				else if(msg=='3') {
					$("#mensaje").html("<strong>La contraseña debe ser mayor a 6 caracteres</strong>").css("color","red");
				}
				else if(msg=='4') {
					$("#mensaje").html("<strong>Este Usuario ya se encuentra registrado</strong>").css("color","red");
				}

				 
				}
			});
		} else {
			$("#mensaje").html("<strong>Debe completar todos los campos</strong>").css("color","red");
		}
	});
});


//registro

