<!DOCTYPE HTML>
<html>
	<head>
		<title>Corey Andrews</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		{{-- <link rel="stylesheet" href="assets/css/main.css" /> --}}
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/968ea91f32.js" crossorigin="anonymous"></script>
    </head>
	<body>

    <div class="bg-no-repeat bg-top bg-cover bg-center bg-black" style="background-image: url(images/bg.jpg)">
		<div class="flex flex-col items-center justify-between min-h-screen">
			<div>
				<!-- Header    -->
				@yield('header')
			</div>

			<div>
				<!-- Content    -->
				@yield('content')
			</div>

			<div>
				<!-- Footer -->
				@include('footer')
			</div>
        </div>
    </div>

        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
