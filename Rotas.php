<?php

	Route::set('Index', function() {
		Index::CreateView('Index');
	});

	Route::set('Admin', function() {
		Admin::CreateView('Admin');
	});

	Route::set('AllCategorias', function() {
		AllCategorias::CreateView('AllCategorias');
	});

	Route::set('AllProdutos', function() {
		AllProdutos::CreateView('AllProdutos');
	});

	Route::set('CadastrarCor', function() {
		CadastrarCor::CreateView('CadastrarCor');
	});

	Route::set('CadastrarCategoria', function() {
		CadastrarCategoria::CreateView('CadastrarCategoria');
	});

	Route::set('CadastrarEndereco', function() {
		CadastrarEndereco::CreateView('CadastrarEndereco');
	});

	Route::set('CadastrarImagem', function() {
		CadastrarImagem::CreateView('CadastrarImagem');
	});

	Route::set('CadastrarProduto', function() {
		CadastrarProduto::CreateView('CadastrarProduto');
	});

	Route::set('CadastrarTamanho', function() {
		CadastrarTamanho::CreateView('CadastrarTamanho');
	});

	Route::set('CadastrarUsuario', function() {
		CadastrarUsuario::CreateView('CadastrarUsuario');
	});

	Route::set('ConsultarPedido', function() {
		ConsultarPedido::CreateView('ConsultarPedido');
	});

	Route::set('Contato', function() {
		Contato::CreateView('Contato');
	});

	Route::set('Carrinho', function() {
		Carrinho::CreateView('Carrinho');
	});

	Route::set('FinalizarCompra', function() {
		FinalizarCompra::CreateView('FinalizarCompra');
	});

	Route::set('ListarCategorias', function() {
		ListarCategorias::CreateView('ListarCategorias');
	});

	Route::set('ListarProdutos', function() {
		ListarProdutos::CreateView('ListarProdutos');
	});

	Route::set('Login', function() {
		Login::CreateView('Login');
	});

	Route::set('Produto', function() {
		Produto::CreateView('Produto');
	});

	Route::set('Sobre', function() {
		Sobre::CreateView('Sobre');
	});