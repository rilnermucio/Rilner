<?php

class CadastroController extends BaseController{

	public function getIndex()
	{
		return View::make('cadastros.cadastroUsuario');
	}


	
}