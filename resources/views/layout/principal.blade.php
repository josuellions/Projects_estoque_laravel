<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/principal.css')}}">
	<link rel="stylesheet" href="{{asset ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>Controle de Estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">
						Controle de Estoque Laravel 
					</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a class="listar" href="{{action ( 'HomeController@index') }}" id="li_01">Home</a></li>
					<li><a class="listar" href="{{action ( 'ProdutoController@lista') }}" id="li_02">Listagem</a></li>
					<li><a class="listar" href="{{action ('ProdutoController@novo')}} " id="li_03">Cadastrar</a></li>
					<li><a id="li_04"></a></li>
				</ul>

			</div>
		</nav>
	
		@yield('conteudo')

		<footer class="navbar navbar-default col-xs-12 col-lg-12">
			<p>&copy Copytight  - 2017</p>
			<p>Josuel Lopes</p>
		</footer>
	</div>

</body>
</html>