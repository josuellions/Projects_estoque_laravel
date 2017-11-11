<!-- Detalhes do produto com uso da view - laravel blade -->

@extends('layout.principal')

@section('conteudo')

	<link rel="stylesheet" type="text/css" href="{{asset('css/listagem.css')}}">

	<h1 class="navbar navbar-default col-xs-12">Listagem de Produtos com laravel</h1>

	<!-- Verificando se exite produtos cadastrados com BLADE -->
	@if(empty($produtos))

		<div class="alert alert-danger">
			Nenhum produto cadastrado foi encontrado!!!
		</div>

	@else
	
	<div class="alinhaTab">
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<th width="5px" >N&#186</th>
					<th width="110px">Produto</th>
					<th></th>
					<th width="40px">Valor</th>
					<th width="420px">Descrição</th>
					<th width="40px" class="quantidade">Qtd</th>
					<th width="5px"><span class="glyphicon glyphicon-pencil alinhaCenter"></span></th>
					<th width="5px">	<span class="glyphicon glyphicon-trash alinhaCenter"></span></th>
					<th width="5px"><span class="glyphicon glyphicon-search alinhaCenter"></span></th>
				</tr>

				@foreach ($produtos as $key=>$p)

					<tr class="{{ $p->quantidade <= 1 ? 'info' : '' }}">
						<td width="5px"  >{{ ++$key }}</td>
						<td width="110px"> {{ $p->nome }}</td>
						<td width="10px">R$</td>
						<td width="40px" class="valor">{{ $p->valor }}</td>
						<td width="420px" class="descricao">{{ $p->descricao }}</td>
						<td width="40px" class="quantidade">{{ $p->quantidade }}</td>
						<td width="5px" class="detalhes" id="btnUpdate">
							<a href="{{action( 'ProdutoController@altera', $p->id ) }}">
								<span class="glyphicon glyphicon-pencil"></span>
							</a>
						</td>
						<td width="5px" class="detalhes">
							<a href="{{action( 'ProdutoController@remove', $p->id ) }}">
								<span class="glyphicon glyphicon-trash"></span>
							</a>
						</td>
						<td width="5px" class="detalhes">
							<a href="{{action( 'ProdutoController@mostra', $p->id ) }}">
								<span class="glyphicon glyphicon-search"></span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endif

<!-- Mensagem de alerta para quantidades menor ou igual a um -->
	<h4>
		<span class="label label-info pull-right glyphicon glyphicon-asterisk">
			Verificar estoque, quantidade abaixo do ideal.
		</span>
	</h4>	

<!-- Exibir Mensagem se adcionado novo produto -->
@if( old( 'nome') )
	<div class="alert alert-success adicionaProd" >
     <p id="listCadastro">Produto <b>{{ old('nome') }}</b>, cadastrado com <b>sucesso!</b> <span class="glyphicon glyphicon-ok"></span></p>
	</div>
@endif

<!-- @if( ( old('nome') || old('quantidade') || old('valor') || old('descricao') ) )
	<div class="alert alert-success adicionaProd" >
	   <p id="listCadastro">Produto <b>{{ old('nome') }}</b>, alterado com <b>sucesso!</b> <span class="glyphicon glyphicon-ok"></span></p>
	</div>
@endif -->

<script type="text/javascript" src="{{asset ('js/listagemProd.js') }}"></script>

@stop