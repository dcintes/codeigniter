<?php

namespace App\Controllers;

use App\Models\NoticiesModel;
use App\Libraries\GroceryCrud;

class Noticies extends BaseController
{
    public function index()
    {
        $noticiesModel = new NoticiesModel();

        $data['noticies'] = $noticiesModel->findAll();

        return view('noticies',$data);
    }

    public function noticia($id = null)
    {
        $noticiesModel = new NoticiesModel();

        $data['noticia'] = $noticiesModel->find($id);

        return view('noticia',$data);
    }

    public function crud() {
        $crud = new GroceryCrud();

	    $crud->setTable('noticies');
        $crud->setRelationNtoN('Categories', 'categoria_noticia', 'categories', 'id_noticia', 'id_categoria', 'nom');
        $crud->setTexteditor(['contingut']);

	    $output = $crud->render();

		return view('crud', (array)$output);
    }

}