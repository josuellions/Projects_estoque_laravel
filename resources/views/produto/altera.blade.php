<!-- formulario add novo produto com uso da view - laravel blade -->

@extends('layout.principal')

@section('conteudo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/cadastroProduto.css')}}">

	<h1 class="navbar navbar-default" id="tittleUpdate">Alterar Produtos com laravel</h1>

<!-- Mensagem de erro prenchimento formulario -->
@if (count($errors) > 0 )
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all( ) as $error )
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif
	<form action="/produtos/update" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
		<input type="hidden" name="id" value="{{ $produtos->id }}"/>
		<div class="form-group">
			<label>Produto:</label>
			<input class="form-control" type="text" name="nome" value="{{ $produtos->nome}}" placeholder="Nome Produto">
			<label>Descrição:</label>
			<input class="form-control" type="text" name="descricao" value="{{$produtos->descricao}}" placeholder="Informações do Produto">
			<label>Valor</label>
			<input class="form-control" type="numb" name="valor" value="{{$produtos->valor}}" paceholder="R$ 0000.00">
			<label>Quantidade</label>
			<input class="form-control" type="numb" name="quantidade" value="{{$produtos->quantidade}}" placeholder="0">
		</div>
		<button class="btn btn-primary col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4" type="submit" name="btnCadastrarProduto">Alterar</button>
	</form>

 <script type="text/javascript" src="{{ asset ( 'js/alteraProd.js' ) }}"></script>

@stop