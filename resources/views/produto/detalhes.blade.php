<!-- Detalhes do produto com uso da view - laravel blade -->

@extends('layout.principal')

@section('conteudo')

<link rel="stylesheet" type="text/css" href="{{asset('css/detalhesProduto.css')}}">

	<h1 class="navbar navbar-default">Detalhes do Produtos com laravel</h1>

		<div class="detalhesProd">

				<h2 >Detalhes produto: {{$produtos->nome}}</h2>
				<ul>
					<li width="40px" height="40px">
						<b>Valor: </b>R$ {{$produtos->valor}}
					</li>
					<li width="10px" height="40px">
						<b>Descrição: </b> {{ $produtos->descricao}}
					</li>
					<li width="40px" height="40px">
						<b>Quantidade: </b> {{$produtos->quantidade}}
					</li>
				</ul>

		</div>

<script type="text/javascript" src="{{ asset ( 'js/detalhesProd.js' ) }}"></script>

@stop