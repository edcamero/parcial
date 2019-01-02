<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="estilo.css">
	<title>Document</title>
</head>
<body>

	<header class="bg-danger my-0 py-1"><div class="container"><h1 class="text-write">Header</h1></div></header>
	<div class="container">
	<section>
		<div class="container my-0">
			<div class="row my-0 py-0">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 border border-dark">
					<div>

						<form action="index.php">
							<div class="form-gruop">
								<label for="msg" ="Nombre:">Nombre</label>
								<input type="text" id="msg" class="form-control">
							</div>
							<div class="form-gruop">
								<label for="">Mensaje:</label>
								<textarea name="" id="" class="form-control" rows="4">escribe tu mensaje</textarea>
							</div>	

							<div class=" py-3 form-group">
								<input type="">
								<input type="email">

							</div>							    
						    <div class="py-3 mb-3">

						        <button  class="btn btn-primary" type="submit">Enviar</button>
						    </div>
								



						</form>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 border border-dark">
					
					<div class="container py-5"> <?php 					
					echo $_SERVER['HTTP_USER_AGENT'];?></div>


				</div>
			</div>
			<div class="row">

				<div class="resaltar div col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 border border-dark">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aliquid.</div>
				<div class="div col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 border border-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aliquid.</div>
				<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 border border-dark ">
					<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aliquid.</pre></div>
				<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 border border-dark">
					<div>
						<?php  
					ECHO $_SERVER['REMOTE_ADDR'];
					?>
					</div>
					la direccion ip es:
				
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 border border-dark">
					stronglLorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam doloremque dolore quae dignissimos 
				</div>
				<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 border border-dark">
					<div class="table-responsive">
						<table class="table table-hover  table-light table-striped">
					<thead>
					 <tr class="table table-bordered ">
						 <th> tabla</th>
						 <th >tabla</th>
						 <th> tabla</th>
					</tr>
					</thead>
					<tbody class="table">
						
					<tr class="table-bordered ">
							<td></td>
						 	<td></td>
						 	<td></td>
					</tr>

					<tr class="table-bordered">
							<td></td>
						 	<td></td>
						 	<td></td>
					</tr>

					<tr class="table-bordered table-striped">
							<td></td>
						 	<td></td>
						 	<td></td>
					</tr>
					
					</tbody>
					
				</table>
					</div>
				


				</div>
			</div>
		</div>
	</section>
	</div>
	<footer class="bg-secondary">
		<div class="container"><h1>Footer</h1></div></footer>


	
</body>
</html>