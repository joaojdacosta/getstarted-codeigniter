<?php

namespace App\Controllers;

use App\Models\Album_model;

class Home extends BaseController
{
	private $albumModel;
	public function __construct()
	{
		helper('form');
		$this->albumModel = new Album_model();	
	}

	public function index()
	{
		$data = array(
			'home' => true
		);
		echo view('header',$data);
		echo view('home');
	}

	/*
	* @Description: method responsavel para carrecar a view de registo
	*/
	public function register()
	{
		$data = array(
			'add' => true
		);
		echo view('header',$data);
		echo view('add');
	}

	/*
	* @Description: method responsavel por colher os dados da view para model
	*/
	public function store(){
        
        $dados = $this->request->getPost();

        $request = $this->albumModel->save($dados);

        if($request){
			$data = array(
				'list' => true,
				'albuns' =>$this->albumModel->findAll()
			);
			echo view('header',$data);
			echo view('list');
        }
    }


	/*
	* @Description: method responsavel para carrecar a view de listagem
	*/
	public function list()
	{
		$data = array(
			'list' => true,
			'albuns' =>$this->albumModel->findAll()
		);
		echo view('header',$data);
		echo view('list');
	}

	/**
	 * @Description: method responsavel por carregar a view de edição
	 */
	public function editar($id = null){
		$data = array(
			'edit' => true,
			'altCd' =>$this->albumModel->find($id)
		);
		echo view('header',$data);
        echo view('edit',$data);
	}
	
	/*
	* @Description: method responsavel por fazer a alteração dos dados na model
	*/
	public function altAlbum(){
        
        $dados = $this->request->getPost();

        $request = $this->albumModel->save($dados);

        if($request){
			$data = array(
				'list' => true,
				'albuns' =>$this->albumModel->findAll()
			);
			echo view('header',$data);
			echo view('list');
        }
    }

	//--------------------------------------------------------------------

}
