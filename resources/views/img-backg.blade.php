<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style >
	.contenedor{
		width: 500px;
		border:solid 2px #000;
	}
	.img-ts{
		width: 200px;
		height: 200px;
	}
	.img-text{

	}

	</style>
<body>

 
 <div class="container">
 	<h1>Imagen ajustada al contenedor</h1>
 	<div class="contenedor">
 		<img src="https://image.freepik.com/vector-gratis/concepto-inicio-negocio_1325-249.jpg" class="img-fluid">
 	</div>
<h1> Alineacion de imagen </h1>
<div style="display: flex;">
 	<div>
 		<img src="https://sites.google.com/site/genesistecnologia39/_/rsrc/1480962898533/de-la-informatica/4.jpeg?height=224&width=400" class="img-ts rounded float-xs-left">
 	</div>
 	<div>
	 	<img src="https://sites.google.com/site/genesistecnologia39/_/rsrc/1480962898533/de-la-informatica/4.jpeg?height=224&width=400" class="img-ts rounded float-xs-right">
	</div>
	<div>
 		<img src="https://sites.google.com/site/genesistecnologia39/_/rsrc/1480962898533/de-la-informatica/4.jpeg?height=224&width=400" class="img-ts rounded mx-auto d-block">
 	</div>
 </div>

 </div>
    

</body>
</html>