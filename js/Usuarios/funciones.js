function insert() {
	let formulario = $("#formCreateUser").serialize();

	fetch(base_url + "UsuariosController/createUser", {
		headers: {
			"Content-type": "application/json",
		},
		method: "POST",
		body: JSON.stringify({
			formulario: formulario,
		}),
	})
		.then(function (response) {
			// Transforma la respuesta. En este caso lo convierte a JSON
			return response.json();
		})
		.then(function (json) {
			// Usamos la información recibida como necesitemos
			console.log(json);
		});
}
