<!DOCTYPE html>
<html lang="en">

<head>
	@include("partials.title-meta")
	@include("partials.head-css")
</head>


<body>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		@yield("content")
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	@include("partials.footer")
	<!-- Back to top -->
	<div class="back-top"></div>

	@include("partials.footer-scripts")

	@if(session('open_modal') || request('open_modal'))
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var modalId = 'postModal{{ session("open_modal") ?? request("open_modal") }}';
			var modalElement = document.getElementById(modalId);
			if (modalElement) {
				var modal = new bootstrap.Modal(modalElement);
				modal.show();
			}
		});
	</script>
	@endif
</body>

</html>
