@extends('htmlBase')

@section('page')

  <form method="POST">
				<h3>No tenés una cuenta? <a href="register.php">Creá una!</a></h3> <br>
				<div>
					<label for="email">Email</label>
					<input type="text" name="email" id="email" value=""/>
				</div>
				<br>
				<div>
					<label for="password">Contrase&ntilde;a</label>
					<input type="password" name="password" id="password"/>
				</div>
				<div>
					Recordame
					<input name="recordame" type="checkbox" value="true">
				</div>
				<div>
					<input type="submit" value="Ingresar">
				</div>

			</form>

@endsection
