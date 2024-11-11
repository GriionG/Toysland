window.addEventListener("load", () => {
	const email = document.getElementById('Correo')
	const pass = document.getElementById('pass')
	const pass2 = document.getElementById('pass2')

	const validaCampos = ()=> {
		//captura los valores que ingresen los usuarios
		const emailValor = email.value.trim()
		const passValor = pass.value.trim()
		const pass2Valor = pass2.value.trim()


        (!emailValor) ? console.log("CAMPO VACIO") : 
		 if (emailValor === '') {
			console.log('CAMPO VACIO')
			validafalla(email, 'Campo vacio')
		}else{
			validaOk(usuario)
		}

		//validar usuario */

	    if (!emailValor) {
	    	validafalla(email, 'Campo Vacio')
	    } else if  (!validaemail(emailValor)){
	    	validafalla(email, 'El Correo es invalido')
	    }else {
	    	validaOk(email)
	    }


        const er = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/    
	    if (!passValor) {
	    	validafalla(pass, 'Campo Vacio')
	    } else if (passValor.length < 8 ) {
	    	validafalla(pass, 'La contraseña debe de tener al menos 8 caracteres.')
	    } else if (!passValor.match(er)){
	    	validafalla(pass, 'La contraseña debe de tener al menos una mayuscula, una minuscula y un numero.')
	    } else{
	    	validaOk (pass)
	    }

	    if (!pass2) {
	    	validafalla(pass2, 'Condirme su contraseña')
	    } else if (passValor !== pass2Valor) {
	    	validafalla(pass2, 'La contraseña no coincide')
	    } else {
	    	validaOk(pass2)
	    }
	}
	    
			const validafalla = (input, msje) => {
			const formControl = input.parentElement
			const aviso = formControl.querySelector('p')
			aviso.innerText = msje  

			formControl.className = 'from-control falla'
		} 
		const validaOk = (input, msje) => {
            const formControl = input.parentElement
            formControl.className = 'from-control Ok'

		}

		const validaemail = (email) => {
			return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);        
		}
})

