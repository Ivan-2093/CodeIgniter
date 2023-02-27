$(document).ready(function () {
	$(document).ready(function () {
		$(".js-example-basic-single-mtto").select2({
			placeholder: "Mantenimiento solicitado",
			width: "resolve",
		});
		$(".js-example-basic-single-sede").select2({
			placeholder: "Sede",
			width: "resolve",
		});
		$("#inputYear").datepicker({
			format: "yyyy",
			viewMode: "years",
			minViewMode: "years",
			autoclose: true, //to close picker once year is selected
			startDate:'1989'
		});

		$('#sidebar').addClass('collapsed');
	});
});
