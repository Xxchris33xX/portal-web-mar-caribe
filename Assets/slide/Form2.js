const Form = document.querySelector('.form');
const inputs = document.querySelectorAll('.form-input');
const inputsEntrada = document.querySelectorAll('#form-int .form-input');
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	productos: /^[a-zA-ZÀ-ÿ0-9\s\.]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{2,40}$/, // Letras y espacios, pueden llevar acentos.
	direccion: /^[a-zA-ZÀ-ÿ0-9\s\.\_\-]{4,255}$/, //Letras, espacios, guion y guion_bajo. Pueden llevar acentos.
	cantidad: /^[0-9]{1,2}$/, // 1 a 2 digitos.
	cedula: /^[0-9]{1,8}$/, // Cédula
	precio:  /^\d+(\.\d{1,2})?$/, // 1 a 4 digitos.
	password: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/, // 8 a 16 digitos. Letras con mínimo un número
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}


const validarFormulario = (e) => {
	switch (e.target.name) {
		case "Nombre":
			validarCampo(expresiones.nombre, e.target, 'name');	
		break;
		case "Apellido":
			validarCampo(expresiones.nombre, e.target, 'sname');
        break;
		case "Nom_usuario":
			validarCampo(expresiones.usuario, e.target, 'user');
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
			validarCampo(expresiones.password, e.target, 'pass1');
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
		case "Nom_categoria":
			validarCampo(expresiones.nombre, e.target, 'nombrecategoria');
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
	console.log(expresion, input, campo)
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
	const inputPassword1 = document.getElementById('pass1');
	const inputPassword2 = document.getElementById('pass2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__pass2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__pass2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__pass2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__pass2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__pass2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__pass2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
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