const Form = document.querySelector('.form.product');
const inputs = document.querySelectorAll('.form-input');
const inputsEntrada = document.querySelectorAll('#form-int .form-input');
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	productos: /^[a-zA-ZÀ-ÿ0-9\s\.]{0,50}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{2,40}$/, // Letras y espacios, pueden llevar acentos.
	direccion: /^[a-zA-ZÀ-ÿ0-9\s\.\_\-]{4,255}$/, //Letras, espacios, guion y guion_bajo. Pueden llevar acentos.
	cantidad: /^\d{1,14}$/, // 1 a 10 digitos.
	cedula: /^\d{1,14}$/, // Cédula
	precio:  /^\d+(\.\d{1,2})?$/, // 1 a 10 digitos.
	password: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/, // 8 a 16 digitos. Letras con mínimo un número
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}


const validarFormulario = (e) => {
	switch (e.target.name) {
		case "Nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');	
		break;
		case "Apellido":
			validarCampo(expresiones.nombre, e.target, 'apellido');
        break;
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "Nom_producto":
            validarCampo(expresiones.productos, e.target, 'producto');
		break;
		case "codigo":
            validarCampo(expresiones.productos, e.target, 'codigo');
		break;
		case "edit-codigo":
            validarCampo(expresiones.productos, e.target, 'codigo_Edit');
		break;
		case "entradaNombre":
            validarCampo(expresiones.productos, e.target, 'entradaNombre');
		break;
		case "edit-entradaNombre":
            validarCampo(expresiones.productos, e.target, 'entradaNombreEdit');
		break;
		case "salidaNombre":
            validarCampo(expresiones.productos, e.target, 'salidaNombre');
		break;
		case "edit-salidaNombre":
            validarCampo(expresiones.productos, e.target, 'salidaNombreEdit');
		break;
		case "Precio":
            validarCampo(expresiones.precio, e.target, 'precio');
		break;
		case "Cantidad":
            validarCampo(expresiones.cantidad, e.target, 'cantidad');
        break;
		case "Contrasenia":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "Contrasenia2":
			validarPassword2();
		break;
		case "Direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;
		case "Correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "Cedula":
			validarCampo(expresiones.cedula, e.target, 'cedula');
		break;
		case "Telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__input-error-activo');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        document.querySelector(`#grupo__${campo} .formulario__input-error-name`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__input-error-activo');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        document.querySelector(`#grupo__${campo} .formulario__input-error-name`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
        
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputsEntrada.forEach((input)=>{
	input.parentElement.addEventListener('click',()=>input.focus())
    input.parentElement.addEventListener('keyup',validarFormulario)
})


inputs.forEach((input)=>{
	input.parentElement.addEventListener('click',()=>input.focus())
    input.parentElement.addEventListener('keyup',validarFormulario)
})


/*Form.addEventListener('submit', (e) => {
	e.preventDefault();

	if(campos.producto && campos.precio && campos.cantidad){
		Form.reset();
	} 
});*/
