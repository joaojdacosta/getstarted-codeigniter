<?php

namespace App\Controllers;

use App\Models\Album_model;

class Home extends BaseController
{
	private $albumModel;
	public function __construct()
	{
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


	//--------------------------------------------------------------------

}
