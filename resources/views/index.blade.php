<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Livewire pagination with Search filter and Sorting in Laravel</title>

	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >

	<style>
	.sorticon{
		visibility: hidden;
		color: darkgray;
	}
	.sort:hover .sorticon{
		visibility: visible;
	}
	.sort:hover{
		cursor: pointer;
	}
	</style>

	@livewireStyles

</head>
<body>

	<livewire:emp-pagination />

	@livewireScripts
</body>
</html>