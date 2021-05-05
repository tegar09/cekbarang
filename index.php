<?php
    include('cek.php');
?>  

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Cek Paket</title>
	</head>
	<body>
		<div class="jumbotron text-center" style="background:linear-gradient(40deg, #64B5F6, #8E24AA);color:#ffffff;">
			<h1>Cek Paket </h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-12 col-md-9">
					<div class="text-center">
						
					</div>
					<div class="table-responsive">
						<form action="cek.php" method="post">
						<div class="input-group mb-3">
						  <input type="text" class="form-control" name='awb' placeholder="Input resi anda..." aria-label="Recipient's username" aria-describedby="basic-addon2">
						  <div class="input-group-append">
						    <button type="submit" class="btn btn-primary">Simpan</button>
						  </div>
						</div>

						<div class="input-group mb-5">
							  <input type="radio" id="jne" name="courir" value="jne">
							  <label for="male">&nbsp JNE &nbsp&nbsp</label>
							  
							  <input type="radio" id="tiki" name="courir" value="tiki">
							  <label for="female">&nbspTIKI&nbsp&nbsp</label>
							  
							  <input type="radio" id="pos" name="courir" value="pos">
							  <label for="female">&nbsp POS &nbsp &nbsp</label>

							  <input type="radio" id="sicepat" name="courir" value="sicepat" >
							  <label for="male">&nbsp SiCepat &nbsp &nbsp</label>
							  
							  <input type="radio" id="anteraja" name="courir" value="antaraja">
							  <label for="female">&nbsp AnterAja &nbsp &nbsp</label>
							  
							  <input type="radio" id="ninja" name="courir" value="ninja">
							  <label for="female">&nbsp Ninja &nbsp &nbsp</label>

							  <input type="radio" id="jnt" name="courir" value="jnt">
							  <label for="male">&nbsp JNT &nbsp &nbsp</label>
						</div>

						</form>


						Delivered TO Qoriah
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>