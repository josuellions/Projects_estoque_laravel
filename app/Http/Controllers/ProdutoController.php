<?php namespace estoque\Http\Controllers;


use Request;
use estoque\Produto;
use estoque\Http\Requests\ProdutosRequest;

// Listar Produtos
class ProdutoController extends Controller {

	// Método padrão atual do mercado 2017 - Recomendado com ELOQUENT
	public function lista( ) {

		$produtos = Produto::all( );
			return view('produto.listagem')->withProdutos($produtos);
		 }

	// // Mostrar detalhes produto - Recomendado com ELOQUENT
	public function mostra( $id ) {

		$resposta = Produto::find($id);

		if( empty( $resposta ) ) {
			return '<h1 styles="text-aling: center">Esse produto não existe!"</h1>';
		}
		return view ( 'produto.detalhes' )->withProdutos($resposta);
	}

	// Cadastrar Novos Produtos
	public function novo( ){
		return view ( 'produto.formulario' );
	}

	// // Adcionar Produto ao BD - com ELOQUENT
	public function adiciona( ProdutosRequest $request ){

		// pegar dados do formulario, criar e salvar
		Produto::create( $request->all( ) );

		// Modo III retornar lista com mensagem de Add- uso apelido no router - Recomendado
		return redirect( )->route( 'listaProd' )->withInput(Request::only( 'nome' )	);

	}

	// Listar JSON -Efeito Teste
	public function listaJson( ) {
		$produtos = Produto::all( );
		return response( )->json( $produtos );
			// Para caminho download de arquivo especifico
			// return response( )->download($caminhoParaArquivoDownload);
	}

	// Remover Produtos - com ELOQUENT
	public function remove( $id ) {
		$produto = Produto::find( $id );
		$produto->delete( );

		return redirect( )->route( 'listaProd' )->with('autofocus', true );
		// ->withInput(Request::only( 'nome' ) );
	}

	// Alterar Produto - com ELOQUENT
	public function altera( $id ) {
		$resposta = Produto::find( $id );

		return view ( 'produto.altera' )->withProdutos( $resposta );
		
		// ->withInput(Request::only( $id )	);
		// var_dump('<pre>'.$produto.'</pre>');
		// var_dump('<pre>'.$produto['nome'].$produto['descricao'].$produto['valor'].$produto['quantidade'].'<pre>');
	}

	// Update Produto - com ELOQUENT
		public function update( ProdutosRequest $request ) {

		$produto = Produto::find( $request['id'] );
		$produto->delete( );
		
		$update = Produto::create( $request->all( ) );

		if( $update )
		// Modo III retornar lista com mensagem de Add- uso apelido no router - Recomendado
			  return redirect( )->route( 'listaProd' )->withInput(Request::only( 'nome' )	);
		 else
			 return redirect( )->route( 'produto.altera', $id )->with(['error' => 'Falha ao editar!']);

	}

}
