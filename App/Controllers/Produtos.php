<?php

use App\Core\BaseControllers;

class Produtos extends BaseControllers{

    public function index(){

        $this->viewDash('produtos/listagemProdutos');

    }

    public function new(){

        $this->viewDash('produtos/cadastrarProduto');
    }

    public function create(){

        $produto = $this->model('produto');
        $produtoDao = $this->model('produtosDao');
        
        $produto->setNome($_POST['nomeProduto']);
        $produto->setEstoque($_POST['estoqueProduto']);
        $produto->setPreco($_POST['precoProduto']);

        $cadastrarProduto = $produtoDao->cadastrarProduto($produto);

        echo $cadastrarProduto;
    }

    public function edit($id){

        $produtos = $this->model('produtosDao');
        $dadosProduto = $produtos->buscarProduto($id);

        return $this->viewDash('produtos/editarProduto', $data = ['dadosProduto' => $dadosProduto]);
    }

    public function update($id){

        $produtos = $this->model('produto');
        $produtoDao = $this->model('produtosDao');

        $produtos->setNome($_POST['nomeProduto']);
        $produtos->setEstoque($_POST['estoqueProduto']);
        $produtos->setPreco($_POST['precoProduto']);

        $atualizarProduto = $produtoDao->atualizarProduto($produtos, $id);

        echo $atualizarProduto;
    }

    public function listarProdutos(){

        $produtos = $this->model('produtosDao');
        $listaProdutos = $produtos->listarProdutos();

        echo json_encode($listaProdutos);
    }

}