</div>
</main>

<footer class="footer">
	<div class="container-fluid">
		<div class="row text-muted">
			<div class="col-6 text-start">
				<p class="mb-0">
					<a class="text-muted" href="" target=""><strong>Copyright © 2023</strong></a> - <a class="text-muted" href="" target=""><strong>Sergio Ivan Galvis Esteban</strong></a>
				</p>
			</div>
			<div class="col-6 text-end">
				<ul class="list-inline">
					
				</ul>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>plantilla/js/app.js"></script>
<script>
	$(document).ready(function() {
		const menus = $(".sidebar-item");
		let bandera = 0;
		const menuActivo = $(".sidebar-item .sidebar-link").map(function() {
			if (this.href === window.location.href) {
				return bandera;
			}
			bandera++;
		}).get();
		menus[menuActivo].classList.add('active');
	});
</script>

</body>

</html>