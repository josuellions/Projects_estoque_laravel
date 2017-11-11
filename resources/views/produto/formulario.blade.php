<!-- formulario add novo produto com uso da view - laravel blade -->

@extends('layout.principal')

@section('conteudo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/cadastroProduto.css')}}">

	<h1 class="navbar navbar-default" id="tittleUpdate">Cadastrar Novo Produtos com laravel</h1>

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

	<form action="/produtos/adiciona" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
		<div class="form-group">
			<label>Produto:</label>
			<input class="form-control" type="text" name="nome" value="{{ old( 'nome' ) }}" placeholder="Nome Produto">
			<label>Descrição:</label>
			<input class="form-control" type="text" name="descricao" value="{{ old( 'descricao' ) }}" placeholder="Informações do Produto">
			<label>Valor</label>
			<input class="form-control" type="numb" name="valor" value="{{ old( 'valor' ) }}" placeholder="R$ 0000.00">
			<label>Quantidade</label>
			<input class="form-control" type="numb" name="quantidade" value="{{ old( 'quantidade' ) }}" placeholder="0">
		</div>
		<button class="btn btn-primary col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-4" type="submit" name="btnCadastrarProduto">Cadastrar</button>
	</form>
 
         <script type="text/javascript" src="{{ asset ( 'js/formularioCadProd.js' ) }}"></script>
        <script type="text/javascript" id="scriptUpdate"></script>

@stop