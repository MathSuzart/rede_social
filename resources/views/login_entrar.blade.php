<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <title></title>
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="{{route('login')}}">Rede Social</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{route('entrar')}}">Login</a></li>
						<li><a href="{{route('cadastrar')}}">Cadastrar</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        <h1>Login</h1>


	        <form method="POST">

	        	<div class="form-group">
	        		<label for="email">E-mail:</label>
	        		<input type="email" class="form-control" name="email" id="email" />
	        	</div>

	        	<div class="form-group">
	        		<label for="senha">Senha:</label>
	        		<input type="password" class="form-control" name="senha" id="senha" />
	        	</div>

	        	<button type="submit" class="btn btn-default">Entrar</button>

	        </form>

	    </div>
    </body>
</html>
