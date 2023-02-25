function insert() {
	let formulario = $("#formCreateUser").serialize();

    var postData = new FormData(document.getElementById("formCreateUser"));

	fetch(base_url + "UsuariosController/createUser", {
		headers: {
			"Content-type": "application/json",
		},
        mode: 'no-cors',
		method: "POST",
        body: postData,
	})
		.then(function (response) {
			// Transforma la respuesta. En este caso lo convierte a JSON
			return response.json();
		})
		.then(function (json) {
			// Usamos la información recibida como necesitemos
			if(json['resultado'] === 'success') {
				alert(`Se ha realizado con exito el registro del usuario ${json['data'].first_name} ${json['data'].first_surname}`);
			}else if (json['resultado'] === 'error') {
				alert(`El usuario que esta intentando ingresar no puede ser registrado ya quue se encuentra un registro con el mismo número de documento ${json['data'].id_costomer}`);
			}
		})
		.catch(function (error) {
            console.log(error);
        });
}
