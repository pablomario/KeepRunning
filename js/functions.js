



/**
 * EVENTO PARA LOGIN 
 */
$(document).on("submit", "#board_login", function(){
  	
	var usuario = $("#board_login_user").val();
	var pass = $("#board_login_password").val();

	if($("#board_login_user").val()!="" && $("#board_login_password").val()!="" ){
		
		var parametros = {
				"email"    : $("#board_login_user").val(),
				"password" : $("#board_login_password").val() 
			};       

			$.ajax({
				data:  parametros,
				url:   './lib/login.php',
				type:  'post',				
				success:  function (response) {
					if(response == "1"){
						window.location="index.php#/carreras";
					}
				}
			});
	}else{
		alert("Esta vacio");
	}

});




/**
 * EVENTO PARA NUEVO USUARIO
 */
$(document).on("submit", "#board_newUser", function(){	

	if($("#board_newUser_email").val()!=$("#board_newUser_email1").val() || $("#board_newUser_password").val()!=$("#board_newUser_password1").val() ){
		$("#resultado").html('<h2 class="alert"><i class="fa fa-exclamation-triangle"></i> Por favor revise los datos</h2>');
	}else{
		var parametros = {
			"nombre"     : $("#board_newUser_nombre").val(),
			"password"   : $("#board_newUser_password").val(),
			"email"      : $("#board_newUser_email").val(),
			"sexo"       : $("#board_newUser_sexo").val(),
			"nacimiento" : $("#board_newUser_nacimiento").val()   
		};   

		$.ajax({
			data:  parametros,
			url:   './lib/nuevoUsuario.php',
			type:  'post',				
			success:  function (response) {
				$("#resultado").html(response);
			}
		});
	}

});



