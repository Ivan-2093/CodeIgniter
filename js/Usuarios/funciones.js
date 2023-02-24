function insert() {
	let formulario = $("#formCreateUser").serialize();

    var postData = new FormData(document.getElementById("formCreateUser"));

	fetch(base_url + "UsuariosController/createUser", {
		headers: {
			"Content-type": "application/json",
		},
        mode: 'no-cors',
		method: "POST",
		/* body: JSON.stringify({
			formulario: formulario,
		}), */
        body: postData,
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
