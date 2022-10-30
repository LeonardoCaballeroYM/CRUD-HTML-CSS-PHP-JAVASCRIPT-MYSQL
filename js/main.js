//Declare las variables de los botones y el contenedor
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

//Añadi el evento de clic para cambiar de panel
signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

//Añadi el evento de clic para cambiar de panel
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

//Funcion para mostrar el texto del txtPassword
function mostrarPassword(){
		var cambio = document.getElementById("TxtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});